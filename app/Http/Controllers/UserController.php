<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Rules\MatchOldPassword;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Unit;
use App\Group;
use App\Position;
use File;

class UserController extends Controller
{
    public function __construct()
    {
        if(!SESSION::has('UserID'))
        {
            // return redirect()->route('aman');
        }
    }

    public function index()
    {
        $app['judul'] = 'Daftar User';
        $app['aktif'] = 'User';
        $unit         = DB::table('unit')
                        ->whereRaw('Deleted != 1 OR Deleted IS null')
                        ->orderBy('Name', 'asc')
                        ->get();
        $user         = User::whereRaw('Deleted != 1 OR Deleted IS null')->get();
                        
        $app['isi']   = compact('user','unit');

        return view('pages.user.index',$app);
    }

    public function tambah()
    {
        $unit       = DB::table('unit')
                        -> orderBy('Name', 'asc')
                        -> get();
        $group      = Group::get(['ID','Name']);
        $position   = Position::get(['ID','Name']);
        $reportto   = User::get(['ID','Name']);

        $app['judul'] = 'Tambah User';
        $app['aktif'] = 'User';
        $app['isi'] = compact('unit','group','position','reportto');

        return view('pages.user.tambah',$app);
    }

    public function filter($unitID)
    {
        $app['judul'] = 'Daftar User';
        $app['aktif'] = 'User';
        $unit         = DB::table('unit')
                            ->whereRaw('Deleted != 1 OR Deleted IS null')
                            -> orderBy('Name', 'asc')
                            -> get();
        if($unitID != 0) {
            $user       = User::whereRaw('UnitID='.$unitID)
                        ->whereRaw('Deleted != 1 OR Deleted IS null')
                        ->orderBy('PositionID', 'asc')
                        ->get();
        } else  {

            $user       = User::whereRaw('Deleted != 1 OR Deleted IS null')
                        ->get();
        }
        $app['isi'] = compact('user','unit');

        return view('pages.user.daftaruser',$app);
    }

    public function add_exec(Request $request)
    {

        
        $user               = new User();

        $user->Name         = $request->input('nama');
        $user->EmployeeName = $request->input('EmployeeName');
        $user->NIP          = $request->input('nip');
        $user->Login        = $request->input('login');
        $user->Password     = $request->input('password');
        $user->Hp           = $request->input('hp');
        $user->Email        = $request->input('email');
        $user->Active       = $request->input('status');
        $user->UnitID       = $request->input('unit');
        $user->GroupID      = $request->input('group');
        $user->PositionID   = $request->input('posisi');
        $user->ReportTo     = $request->input('reportto');
        $user->CreatedBy    = Session::get("UserID");
        $user->UpdatedBy    = Session::get("UserID");

        if ($request->hasFile('foto')) {
            $foto           = $request->file('foto');
            $extension      = $foto->getClientOriginalExtension();
            $fotoname       = 'F_'.time() . '.' . $extension;
            $foto->move('photos/photo',$fotoname);
            $user->File     = $fotoname;
        }

        if ($request->hasFile('paraf')) {
            $paraf          = $request->file('paraf');
            $extension      = $paraf->getClientOriginalExtension();
            $parafname      = 'P_'.time() . '.' . $extension;
            $paraf->move('photos/paraf',$parafname);
            $user->Paraf    = $parafname;
        }

        if ($request->hasFile('signature')) {
            $signature      = $request->file('signature');
            $extension      = $signature->getClientOriginalExtension();
            $signame        = 'S_'.time() . '.' . $extension;
            $signature->move('photos/signature',$signame);
            $user->Signature = $signame;
        }

        $user->save();

        return redirect('user');
    }

    public function edit($id)
    {
        $user       = User::where('ID',$id)->get();
        $unit       = DB::table('unit')
                        -> orderBy('Name', 'asc')
                        -> get();
        $group      = Group::get(['ID','Name']);
        $position   = Position::get(['ID','Name']);
        $reportto   = User::get(['ID','Name']);

        $app['judul']   = 'Edit User';
        $app['aktif']   = 'User';
        $app['isi']     = compact('user','unit','group','position','reportto');

        return view('pages.user.edit',$app);
    }

    public function edit_exec(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required',
            'login' => 'required',
            'password' => 'required',
            'email' => 'required',
            'unit' => 'required',
            'group' => 'required',
            'posisi' => 'required',
            'reportto' => 'required',
            'status' => 'required'
        ]);

        if (!empty($request->hasFile('foto'))) {
            $foto           = $request->file('foto');
            $extension      = $foto->getClientOriginalExtension();
            $fotoname       = 'F_'.time() . '.' . $extension;
            $foto->move('photos/photo',$fotoname);
            if($request->nonfoto != "avatar-1.jpg") {
                File::delete('photos/photo/'.$request->nonfoto);
            }
        } else {
            $fotoname       = $request->nonfoto;
        }

        if (!empty($request->hasFile('paraf'))) {
            $paraf          = $request->file('paraf');
            $siextension    = $paraf->getClientOriginalExtension();
            $parafname      = 'P_'. time() . '.' . $siextension;
            $paraf->move('photos/paraf',$parafname);

            // File::delete('photos/paraf/'.$request->nonparaf);
        } else {
            $parafname      = $request->nonparaf;
        }

        if (!empty($request->hasFile('signature'))) {
            $signature      = $request->file('signature');
            $siextension    = $signature->getClientOriginalExtension();
            $signame        = 'S_'.time() . '.' . $siextension;
            $signature->move('photos/signature',$signame);

            // File::delete('photos/signature/'.$request->nonsignature);
        } else {
            $signame       = $request->nonsignature;
        }

        User::where('ID',$request->id)->update([
            'Name'          => $request->nama,
            'EmployeeName'  => $request->EmployeeName,
            'NIP'           => $request->nip,
            'Login'         => $request->login,
            'Password'      => $request->password,
            'Hp'            => $request->hp,
            'Email'         => $request->email,
            'UnitID'        => $request->unit,
            'GroupID'       => $request->group,
            'PositionID'    => $request->posisi,
            'ReportTo'      => $request->reportto,
            'Paraf'         => $parafname,
            'Signature'     => $signame,
            'File'          => $fotoname,
            'ReportTo'      => $request->reportto,
            'Active'        => $request->status,
            'UpdatedBy'     => Session::get("UserID"),

        ]);

        $arr = array('status' => 'true', 'msg' => 'Berhasil');
        return Response()->json($arr);
    }

    public function hapus($id)
    {
        $userInMail = DB::table('mail')
                        ->selectRaw('COUNT(mail.ID) AS CountMail')
                        ->join('user',function($q){
                            $q->on('user.ID','=','mail.StatusUserID');
                            $q->orOn('user.ID','=','mail.StatusDirID');
                            $q->orOn('user.ID','=','mail.CreatedBy');
                        })
                        ->where('user.ID', $id)->value('CountMailTo');
        $userInMailTo = DB::table('mailto')
                        ->selectRaw('COUNT(mailto.ID) AS CountMailTo')
                        ->join('user','user.ID','=','UserID')
                        ->where('user.ID', $id)->value('CountMailTo');
        $userInHistory = DB::table('history')
                        ->selectRaw('COUNT(history.ID) AS CountHistory')
                        ->join('user',function($q){
                            $q->on('user.ID','=','history.dFrom');
                            $q->orOn('user.ID','=','history.dTo');
                            $q->orOn('user.ID','=','history.CreatedBy');
                        })
                        ->where('user.ID', $id)->value('CountMailTo');                
        $sumMail = $userInMail + $userInMailTo + $userInHistory;
        if($sumMail == 0) {
            if($id == 10) {
                return redirect('user');
            } else {
                $user       = User::where('ID',$id)->first();
                if($user->File != "avatar-1.jpg") {
                    File::delete('photos/photo/'.$user->File);
                }
                File::delete('photos/paraf/'.$user->Paraf);
                File::delete('photos/signature/'.$user->Signature);
    
                User::where('ID',$id)->delete();
                return redirect('user');
            }
        } else {
            User::where('ID', $id)->update([
                'Deleted' => '1',
                'UpdatedBy' => session('UserID')
            ]);
            return redirect('user');
        }
    }

    public function ganti_password(Request $request)
    {
        $request->validate([
            'PasswordLama' => ['required', new MatchOldPassword],
            'PasswordBaru' => ['required'],
            'KonfirmasiBaru' => ['same:PasswordBaru'],
        ]);
        
        User::where('ID',session('UserID'))->update(['Password' => $request->PasswordBaru]);
        
        $pesan = 'Berhasil';
        $arr = array('status' => 'true', 'msg' => $pesan);
        return Response()->json($arr);
    }

    public function ganti_pp(Request $request)
    {
        $request->validate([
            'foto' => ['required'],
        ]);
        
        $foto           = $request->file('foto');
        $extension      = $foto->getClientOriginalExtension();
        $fotoname       = 'F_'.time() . '.' . $extension;
        $foto->move('photos/photo',$fotoname);
        
        User::where('ID',session('UserID'))->update(['File' => $fotoname]);

        $pesan = $request->session()->put('UserFile', $fotoname);
        $arr = array('status' => 'true',
                     'msg' => $pesan,
                     'uploaded_image' => '<img src="'.url('photos/photo/'.$fotoname).'" class="img-radius" alt="User-Profile-Image">'
                    );
        return Response()->json($arr);
    }
}
