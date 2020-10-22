<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Sitadok\VarGlobal;

class DonationsController extends Controller
{
    var $global;
    public function __construct()
    {
        
    }
    public function index()
    {
        if(session('UserID')=='')
        {
            return redirect('admin-login')->with('alert','Silahkan login kembali!');
        }
        
        $app['judul'] = 'Rencana Donasi';
        $app['aktif'] = 'Rencana Donasi';
        $app['DonatePlan'] = DB::table('donate')
                                ->selectRaw('donate.ID,Invoice,AmountUnique,donate.AccountNumber,mbank.Bank,donate.CreatedDate')
                                ->join('mbank','donate.AccountNumber','=','mbank.Number')
                                ->whereRaw('DonorID='.Session::get('UserID'))
                                ->get()->toArray();

        return view('pages.donations.index',$app);
    }
}
