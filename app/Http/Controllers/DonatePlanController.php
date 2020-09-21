<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Sitadok\VarGlobal;

class DonatePlanController extends Controller
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
        $app['DonatePlan'] = DB::table('donate')->get()->toArray();

        return view('pages.donateplan.index',$app);
    }
    public function hapus($id)
    {
        $test = DB::table('donate')->where('ID', $id)->delete();
        dd($test);
        return redirect('donate-plan');
    }
}
