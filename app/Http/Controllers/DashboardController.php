<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Sitadok\VarGlobal;

class DashboardController extends Controller
{
    var $global;
    public function __construct()
    {
        
    }
    public function index()
    {
        if(session('UserID')=='')
        {
            return redirect('admin')->with('alert','Silahkan login kembali!');
        }
        
        $app['judul'] = 'Dashboard';
        $app['aktif'] = 'Dashboard';
        return view('pages.dashboard',$app);
    }

    public function show(Request $request, $id)
    {
        $value = $request->session()->get('key');
    }
}