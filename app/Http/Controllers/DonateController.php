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
    public function paymentMethod($nominal)
    {
        $app['nominal'] = $nominal;
        return view('pages.donate.paymentmethod',$app);
    }
    public function confirmation(Request $request)
    {
        $app['nominal'] = $request->nominal;
        $app['payMethod'] = $request->payMethod;
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
        Donate::insertGetId($donate);

        return view('pages.donate.index',$donate);
    }
}
