<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Donasi\VarGlobal;

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
        $app['DonatePlan'] = DB::table('donate')
                                ->selectRaw('donate.ID,Invoice,donate.Name,Phone,AmountUnique,donate.AccountNumber,mbank.Bank')
                                ->join('mbank','donate.AccountNumber','=','mbank.Number')
                                ->get()->toArray();

        return view('pages.donateplan.index',$app);
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

        return view('pages.donateplan.edit',$app);
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
