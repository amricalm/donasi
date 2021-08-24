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
    public function __construct()
    {
        $varglobal      = new VarGlobal();
        $program   = new Program();

        $this->global   = $varglobal;
        $this->program = $program;
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

    public function progresslist($id)
    {
        if(session('UserID')=='')
        {
            return redirect('admin-login')->with('alert','Silahkan login kembali!');
        }
        
        $app['judul']       = 'Progres Program';
        $app['aktif']       = 'Program';
        $app['ProgramByID'] = $this->program->GetProgramByID($id);
        $app['Progress']    = $this->program->GetProgressProgram($id);

        return view('pages.program.progresslist',$app);
    }

    public function addprogress($id)
    {
        if(session('UserID')=='')
        {
            return redirect('admin-login')->with('alert','Silahkan login kembali!');
        }
        $app['judul']       = 'Tambah Perkembangan Program';
        $app['aktif']       = 'Program';
        $app['ProgramByID'] = $this->program->GetProgramByID($id);

        return view('pages.program.addprogress',$app);
    }

    public function saveprogress(Request $request)
    {
        $validatedData1 = $request->validate([
            'ProgressDate' => 'required',
            'Summary' => 'required'
        ]);

        DB::table('progressprogram')->insert([
            'ProgramID'    => $request->ProgramID,
            'ProgressDate' => $request->ProgressDate != '' ? Carbon::createFromFormat('d-m-Y', $request->ProgressDate)->format('Y-m-d') : '',
            'Summary'      => $request->Summary,
            'Description'  => $request->Description,
            'CreatedBy'    => Session::get("UserID"),
            'CreatedDate'  => Carbon::now()->toDateTimeString(),
            'UpdatedBy'    => Session::get("UserID"),
            'UpdatedDate'  => Carbon::now()->toDateTimeString()
        ]);

        $arr = array('status' => 'true', 'msg' => 'Berhasil');
        return Response()->json($arr);//redirect('surat/edit/'.$mail['ID']);
    }

    public function editprogress($id)
    {
        $app['judul']       = 'Edit Perkembangan Program';
        $app['aktif']       = 'Program';
        $app['Progress']    = $this->program->GetProgressProgramByID($id);
        $app['ProgramByID'] = $this->program->GetProgramByID($app['Progress']->ProgramID);
        
        return view('pages.program.editprogress',$app);
    }

    public function updateprogress(Request $request)
    {   
        DB::table('progressprogram')->where('ID',$request->ID)->update([
            'ProgressDate'  => $request->ProgressDate != '' ? Carbon::createFromFormat('d-m-Y', $request->ProgressDate)->format('Y-m-d') : '',
            'Summary'       => $request->Summary,
            'Description'   => $request->Description,
            'UpdatedBy'     => Session::get("UserID"),
            'UpdatedDate'   => Carbon::now(),
        ]);

        $arr = array('status' => 'true', 'msg' => 'Berhasil');
        return Response()->json($arr);
    }

    public function deleteprogress($id)
    {
        DB::table('progressprogram')->where('ID', $id)->delete();
        
        $arr = array('status' => 'true', 'msg' => 'Berhasil');
        return Response()->json($arr);
    }
}
