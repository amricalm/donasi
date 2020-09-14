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
        return view('pages.donate.index');
    }
    public function paymentMethod(Request $request)
    {
        $app['amount'] = $request->amount;
        return view('pages.donate.paymentmethod',$app);
    }
    public function confirmation(Request $request)
    {
        $app['amount']  = $request->amount;
        $app['payType'] = $request->payType;
        $app['payLabel']= $request->payLabel;
        $app['payImage']= $request->payImage;

        return view('pages.donate.confirmation',$app);
    }
    public function save(Request $request)
    {
        $donate['Amount']   = $request->amount;
        $donate['Payment']  = $request->payment;
        $donate['Name']     = $request->name;
        $donate['Phone']    = $request->phone;
        $donate['Email']    = $request->email;
        $donate['Message']  = $request->message;
        $donate['CreatedDate'] = Carbon::now();
        $donate['DonateID'] = Donate::insertGetId($donate);

        return view('pages.donate.summary',$donate);
    }
    public function summary($id)
    {
        $app['donate'] = DB::table('donate')->where('ID', $id)->first();
        
        return view('pages.donate.index',$app);
    }
}
