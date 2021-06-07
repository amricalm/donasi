<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Donasi\VarGlobal;
use Carbon\Carbon;
use App\Program;
use File;

class ProgramController extends Controller
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
        
        $app['judul'] = 'Program';
        $app['aktif'] = 'Program';
        $app['Program'] = DB::table('mprogram')->get()->toArray();

        return view('pages.program.index',$app);
    }

    public function tambah()
    {
        $app['judul'] = 'Tambah Program';
        $app['aktif'] = 'Program';

        return view('pages.program.tambah',$app);
    }

    public function save(Request $request)
    {
        $validatedData1 = $request->validate([
            'Name' => 'required',
            'Url' => 'required'
        ]);

        $app               = new Program();

        $app->Name         = $request->input('Name');
        $app->Summary      = $request->input('Summary');
        $app->Description  = $request->input('Description');
        $app->Url          = $request->input('Url');
        $app->Banner       = $request->input('Banner');
        $app->Active       = $request->input('Active');
        $app->DonationTarget = $request->input('DonationTarget');
        $app->StartDate    = $request->StartDate != '' ? Carbon::createFromFormat('d-m-Y', $request->input('StartDate'))->format('Y-m-d') : '';
        $app->EndDate      = $request->EndDate != '' ? Carbon::createFromFormat('d-m-Y', $request->input('EndDate'))->format('Y-m-d') : '';
        $app->CreatedBy    = Session::get("UserID");
        $app->UpdatedBy    = Session::get("UserID");

        if ($request->hasFile('Banner')) {
            $foto           = $request->file('Banner');
            $extension      = $foto->getClientOriginalExtension();
            $fotoname       = 'banner-'.$request->input('Url'). '.' . $extension;
            $foto->move('photos/program',$fotoname);
            $app->Banner    = $fotoname;
        }

        $app->save();

        $arr = array('status' => 'true', 'msg' => 'Berhasil');
        return Response()->json($arr);//redirect('surat/edit/'.$mail['ID']);
    }

    public function edit($id)
    {
        $app['judul']   = 'Edit Program';
        $app['aktif']   = 'Program';
        $app['program']  = DB::table('mprogram')
                            ->selectRaw('mprogram.*, DATE_FORMAT(StartDate, "%d-%m-%Y") AS StartDatedmY, DATE_FORMAT(EndDate, "%d-%m-%Y") AS EndDatedmY')
                            ->where('ID', $id)
                            ->first();

        return view('pages.program.edit',$app);
    }
    public function update(Request $request)
    {   
        if (!empty($request->hasFile('Banner'))) {
            $foto           = $request->file('Banner');
            $extension      = $foto->getClientOriginalExtension();
            $fotoname       = 'banner-'.$request->input('Url'). '.' . $extension;
            $foto->move('photos/program',$fotoname);
            if($request->nonfoto != "avatar-1.jpg") {
                File::delete('photos/program/'.$request->nonBanner);
            }
        } else {
            $fotoname       = $request->nonBanner;
        }

        DB::table('mprogram')->where('ID',$request->ID)->update([
            'Name'          => $request->Name,
            'Summary'       => $request->Summary,
            'Description'   => $request->Description,
            'Url'           => $request->Url,
            'Active'        => $request->Active,
            'DonationTarget'=> $request->DonationTarget,
            'StartDate'     => $request->StartDate != '' ? Carbon::createFromFormat('d-m-Y', $request->StartDate)->format('Y-m-d') : '',
            'EndDate'       => $request->EndDate != '' ? Carbon::createFromFormat('d-m-Y', $request->EndDate)->format('Y-m-d') : '',
            'Banner'        => $fotoname,
            'UpdatedBy'     => Session::get("UserID"),
            'UpdatedDate'   => Carbon::now(),
        ]);

        $arr = array('status' => 'true', 'msg' => 'Berhasil');
        return Response()->json($arr);
    }
    public function hapus($id)
    {
        $program       = Program::where('ID',$id)->first();
        File::delete('photos/program/'.$program->Banner);

        DB::table('mprogram')->where('ID', $id)->delete();
        
        $arr = array('status' => 'true', 'msg' => 'Berhasil');
        return Response()->json($arr);
    }
}
