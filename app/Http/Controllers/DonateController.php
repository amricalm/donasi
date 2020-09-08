<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class DonateController extends Controller
{
    public function __construct()
    {

    }
    public function index()
    {
        return view('pages.donate');
    }
    public function paymentMethod($nominal)
    {
        $app['nominal'] = $nominal;
        return view('pages.paymentmethod',$app);
    }
    public function confirmation(Request $request)
    {
        $app['nominal'] = $request->nominal;
        $app['payMethod'] = $request->payMethod;
        return view('pages.confirmation',$app);
    }
}
