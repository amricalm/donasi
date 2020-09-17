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
}
