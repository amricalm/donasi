<?php

namespace App\Http\Controllers;
use DateTime;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Donate;

class DonateController extends Controller
{
    public function __construct()
    {

    }
    public function index()
    {
        $app['amount']    = DB::table('mamount')->get()->toArray();
        return view('pages.donate.index',$app);
    }
    public function paymentMethod(Request $request)
    {
        $app['amount']  = $request->amount;
        $app['bank']    = DB::table('mbank')->get()->toArray();
        return view('pages.donate.paymentmethod',$app);
    }
    public function confirmation(Request $request)
    {
        $app['amount']  = $request->amount;
        $app['bank']    = DB::table('mbank')->where('ID', $request->payID)->get()->toArray();

        return view('pages.donate.confirmation',$app);
    }
    function invoicenumber()
    {
            $nomor  = DB::table('donate')
                    ->selectRaw("MAX(SUBSTRING(Invoice,11)) AS maks")->first();
            
            $NoInvMax = $nomor->maks;
        
        return $NoInvMax;
    }
    public function save(Request $request)
    {
        $app['Amount']   = str_replace(".", "", $request->amount);
        $app['AccountNumber']  = $request->accountnumber;
        $app['Name']     = $request->name;
        $app['Phone']    = $request->phone;
        $app['Email']    = $request->email;
        $app['Message']  = $request->message;
        $app['CreatedDate'] = Carbon::now();
        $app['MaxConfDate'] = Carbon::tomorrow()->format('Y-m-d').' '.Carbon::now()->format('H:i:s');
        $date            = Carbon::today()->format('y/m/d');
        $invoiceDate     = str_replace("/", "", $date);

        $noSequence      = $this->invoicenumber();
        $noSequence++;
        $invoiceNumber   = sprintf("%06s", $noSequence);
        $app['Invoice']  = 'INV-'.$invoiceDate.''.$invoiceNumber;
        
        $donateID        = Donate::insertGetId($app);

        $maxConf = date_create($app['MaxConfDate'])->format("d M Y, H:i");
        $app['donate'] = DB::table('donate')
                        ->join('mbank','AccountNumber','=','Number')
                        ->where('donate.ID', $donateID)
                        ->selectRaw('Bank,mbank.Name AS AccountName')
                        ->first();
        $this->sms($app['Invoice'],$app['Name'],$app['Phone'],$app['Amount'],$app['AccountNumber'],$maxConf,$app['donate']->Bank,$app['donate']->AccountName);
        return $this->summary($donateID);
    }
    public function summary($id)
    {
        
        $app['donate'] = DB::table('donate')
                        ->join('mbank','AccountNumber','=','Number')
                        ->where('donate.ID', $id)
                        ->selectRaw('Invoice, Amount, AccountNumber, mbank.Name AS AccountName, Image AS AccountImage, BranchOffice, MaxConfDate')
                        ->first();
        $MaxConfDate = $app['donate']->MaxConfDate;                 
        $app['MaxConfDate'] = date_create($MaxConfDate)->format("H:i, d M Y");
        return view('pages.donate.summary',$app);
    }
    public function sms($invoice,$name,$phone,$amount,$accountNumber,$maxConf,$bank,$accountName) {
        $userkey = 'a60f7cc38783';
        $passkey = 'df5787b62c7c71c92c5a457d';
        $telepon = $phone;
        $message = 'Bismillah..
                    Assalaamualaikum kak '.$name.', 
                    Silahkan transfer sejumlah Rp '.$amount.' 
                    ke Bank '.$bank.', no rekening: '.$accountNumber.', an. '.$accountName.'. sebelum '.$maxConf.' WIB';
        $url = 'https://console.zenziva.net/reguler/api/sendsms/';
        $curlHandle = curl_init();
        curl_setopt($curlHandle, CURLOPT_URL, $url);
        curl_setopt($curlHandle, CURLOPT_HEADER, 0);
        curl_setopt($curlHandle, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curlHandle, CURLOPT_SSL_VERIFYHOST, 2);
        curl_setopt($curlHandle, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($curlHandle, CURLOPT_TIMEOUT,30);
        curl_setopt($curlHandle, CURLOPT_POST, 1);
        curl_setopt($curlHandle, CURLOPT_POSTFIELDS, array(
            'userkey' => $userkey,
            'passkey' => $passkey,
            'to' => $telepon,
            'message' => $message
        ));
        $results = json_decode(curl_exec($curlHandle), true);
        curl_close($curlHandle);
    }
}
