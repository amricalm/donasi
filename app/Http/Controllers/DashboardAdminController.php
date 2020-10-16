<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Sitadok\VarGlobal;

class DashboardAdminController extends Controller
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
        
        $app['judul'] = 'Dashboard';
        $app['aktif'] = 'Dashboard';
        return view('pages.dashboard.admindashboard',$app);
    }

    public function show(Request $request, $id)
    {
        $value = $request->session()->get('key');
    }
}