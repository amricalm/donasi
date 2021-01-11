<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Sitadok\VarGlobal;

class FundraiserController extends Controller
{
    public function __construct()
    {
        $varglobal = new VarGlobal();
        $this->global = $varglobal;
    }
    public function index()
    {
        $app['donate'] = DB::table('donate')
                        ->join('donor','donate.FundraiserCode','=','donor.FundraiserCode')
                        ->selectRaw('Hits, count(donate.FundraiserCode) as CountFormInput')
                        ->whereRaw("donor.FundraiserCode = '".Session::get('UserFundraiserCode')."'")
                        ->first();
        if(!empty(Session::get('UserID'))) {
            return view('pages.fundraiser.fundraiser',$app);
        } else {
            return redirect()->route('login',$app);
        }
    }
}
