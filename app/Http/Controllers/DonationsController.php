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
                                ->selectRaw('donate.ID,Invoice,Amount,donate.AccountNumber,mbank.Bank,donate.CreatedDate')
                                ->join('mbank','donate.AccountNumber','=','mbank.Number')
                                ->whereRaw('DonorID='.Session::get('UserID'))
                                ->get()->toArray();

        return view('pages.donations.index',$app);
    }
    public function edit($id)
    {
        $app['judul']   = 'Edit Rencana Donasi';
        $app['aktif']   = 'Rencana Donasi';
        $app['bank']    = DB::table('mbank')->get()->toArray();
        $app['donate']  = DB::table('donate')
                            ->selectRaw('donate.ID as ID, mbank.Name as AccountName, mbank.Label as AccountLabel,mbank.Image as AccountImage,Invoice,Amount,AccountNumber,donate.Name,Phone,Email,Message,MaxConfDate')
                            ->join('mbank','donate.AccountNumber','=','mbank.Number')
                            ->where('donate.ID', $id)
                            ->first();

        return view('pages.donations.edit',$app);
    }
    public function update(Request $request) {
        DB::table('donate')->where('ID',$request->id)->update([
            'Invoice'       => $request->Invoice,
            'Amount'        => $request->Amount,
            'AccountNumber' => $request->AccountNumber,
            'Name'          => $request->Name,
            'Phone'         => $request->Phone,
            'Email'         => $request->Email,
            'Message'       => $request->Message,
            'MaxConfDate'   => $request->MaxConfDate,
        ]);

        $arr = array('status' => 'true', 'msg' => 'Berhasil');
        return Response()->json($arr);
    }
    public function hapus($id)
    {
        DB::table('donate')->where('ID', $id)->delete();
        
        $arr = array('status' => 'true', 'msg' => 'Berhasil');
        return Response()->json($arr);
    }
}
