<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;
use App\Donasi\VarGlobal;
use Illuminate\Validation\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use App\User;
use App\Karyawan;
use Exception;

// use Redirect;


class LoginController extends Controller
{
    public function index()
    {
        if (!empty(session('UserID'))) {
            return redirect()->route('home');
        } else {
            return view('pages.login.login');
        }
    }
    public function logout()
    {
        session()->flush();
        return redirect()->route('login');
    }
    public function registration(Request $request)
    {
        return view('pages.login.registration');
    }
    public function validasi(Request $request)
    {
        if ($request->FormType == 'registration') {
            request()->validate([
                'Name' => 'required|min:2|max:50|unique:user',
                'Hp' => 'required|numeric|unique:user',
                'Login' => 'required|min:6|max:50|alpha_dash|unique:user',
                'Password' => 'required',
                'ConfirmPassword' => 'same:Password',
            ], [
                'Name.min' => 'Nama minimal 2 karakter',
                'Name.max' => 'Nama maksimal 50 karakter',
                'Name.unique' => 'Nama sudah terdaftar',
                'Hp.unique' => 'Nomor handphone sudah terdaftar',
                'Login.min' => 'Nama minimal 6 karakter',
                'Login.max' => 'Nama maksimal 50 karakter',
                'Login.unique' => 'Username sudah terdaftar',
                'ConfirmPassword.same' => 'Password tidak cocok',
            ]);

            $app['NamaLengkap'] = $request->input('Name');
            $employeeID = Karyawan::insertGetId($app);

            $app                = new User();
            $app['Name']        = $request->input('Name');
            $app['Hp']          = $request->input('Hp');
            $app['Login']       = $request->input('Login');
            $app['Password']    = bcrypt($request->Password);
            $app['EmployeeID']  = $employeeID;
            $app['GroupID']     = 4;
            $app->save();
        }
        $username = $request->Login;
        $password = $request->Password;


        $user = DB::table('user')
            ->where('Login', $username)
            ->whereRaw('(user.Deleted != 1 OR user.Deleted IS null)')
            ->get()->toArray();
        if (count($user) > 0) {
            if (($user[0]->Login == $username) && Hash::check($password, $user[0]->Password)) {
                $semuamenu = array();
                $menus = DB::table('role')
                    ->select('*')
                    ->join('sysmodule', 'ModuleID', '=', 'sysmodule.ID')
                    ->where('GroupID', $user[0]->GroupID)
                    ->whereRaw('Type = "Menu"')
                    ->whereNull('ParentID')
                    ->orderBy('Seq')
                    ->get();
                $menus = collect($menus)->map(function ($x) {
                    return (array) $x;
                })->toArray();
                for ($i = 0; $i < count($menus); $i++) {
                    $semuamenu[$i] = $menus[$i];
                    $menus1 = $this->getMenu($user[0]->GroupID, $menus[$i]['ID']);
                    $menus1 = collect($menus1)->map(function ($y) {
                        return (array) $y;
                    })->toArray();
                    $semuamenu[$i]['child'] = array();
                    if (count($menus1) > 0) {
                        $semuamenu[$i]['child'] = $menus1;
                        for ($j = 0; $j < count($menus1); $j++) {
                            //cari cucu menu
                            $menus2 = $this->getMenu($user[0]->GroupID, $menus1[$j]['ID']);
                            $menus2 = collect($menus2)->map(function ($z) {
                                return (array) $z;
                            })->toArray();
                            $semuamenu[$i]['child'][$j]['child'] = array();
                            if (count($menus2) > 0) {
                                $semuamenu[$i]['child'][$j]['child'] = $menus2;
                                for ($k = 0; $k < count($menus2); $k++) {
                                    //cari grand cucu menu
                                    $menus3 = $this->getMenu($user[0]->GroupID, $menus2[$k]['ID']);
                                    $menus3 = collect($menus3)->map(function ($z) {
                                        return (array)$z;
                                    })->toArray();
                                    $semuamenu[$i]['child'][$j]['child'][$k]['child'] = array();
                                    if (count($menus3) > 0) {
                                        $semuamenu[$i]['child'][$j]['child'][$k]['child'] = $menus3;
                                        for ($l = 0; $l < count($menus3); $l++) {
                                            //cari grand cucu menu
                                            $menus4 = $this->getMenu($user[0]->GroupID, $menus3[$l]['ID']);
                                            $menus4 = collect($menus4)->map(function ($z) {
                                                return (array)$z;
                                            })->toArray();
                                            $semuamenu[$i]['child'][$j]['child'][$k]['child'][$l]['child'] = array();
                                            if (count($menus4) > 0) {
                                                $semuamenu[$i]['child'][$j]['child'][$k]['child'][$l]['child'] = $menus4;
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }
                }

                $sess['UserID'] = $user[0]->ID;
                $sess['UserLogin'] = $user[0]->Login;
                $sess['UserName'] = $user[0]->Name;
                $sess['UserEmployeeID'] = $user[0]->EmployeeID;
                $sess['UserGroupID'] = $user[0]->GroupID;
                $sess['UserHP'] = $user[0]->Hp;
                $sess['UserEmail'] = $user[0]->Email;
                $sess['UserFile'] = $user[0]->File;
                $sess['UserActive'] = $user[0]->Active;
                $sess['UserDeleted'] = $user[0]->Deleted;
                $sess['UserMenu'] = $semuamenu;
                session($sess);
                return redirect()->route('home');
            } else {
                return redirect()->back()->with('alert', 'Password tidak dikenal!');
            }
        } else {
            return redirect()->back()->with('alert', 'Username tidak terdaftar!');
        }
    }

    function getMenu($groupID, $parentID)
    {
        return DB::table('role')
            ->select('*')
            ->join('sysmodule', 'ModuleID', '=', 'sysmodule.ID')
            ->where('GroupID', '=', $groupID)
            ->where('Type', '=', 'Menu')
            ->where('ParentID', '=', $parentID)
            ->get();
    }
}
