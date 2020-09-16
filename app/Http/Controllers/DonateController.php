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
    public function save(Request $request)
    {
        $app['Amount']   = str_replace(".", "", $request->amount);
        $app['AccountNumber']  = $request->accountnumber;
        $app['Name']     = $request->name;
        $app['Phone']    = $request->phone;
        $app['Email']    = $request->email;
        $app['Message']  = $request->message;
        $app['CreatedDate'] = Carbon::now();
        $donateID        = Donate::insertGetId($app);

        return $this->summary($donateID);
    }
    public function summary($id)
    {
        $app['donate'] = DB::table('donate')
                        ->join('mbank','AccountNumber','=','Number')
                        ->where('donate.ID', $id)
                        ->selectRaw('donate.Amount, mbank.Number AS AccountNumber, mbank.Name AS AccountName, mbank.Image AS AccountImage, mbank.BranchOffice')
                        ->first();
        
        return view('pages.donate.summary',$app);
    }
}
