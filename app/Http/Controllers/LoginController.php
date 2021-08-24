<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;
use App\Donasi\VarGlobal;
use Illuminate\Validation\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Hash;
use App\Login;
use App\Donor;
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
    public function validasi(Request $request)
    {
        $username = $request->username;
        $password = $request->password;
        $user = DB::table('donor')
            ->where(function ($query) use ($username) {
                $query->where('Phone', $username)
                    ->orWhere('Email', $username);
            })
            ->whereRaw('(donor.Deleted != 1)')
            ->get()->toArray();
        if (count($user) > 0) {
            if ((($user[0]->Phone || $user[0]->Email) == $request->username) && Hash::check($password, $user[0]->Password)) {
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
                $sess['UserName'] = $user[0]->Name;
                $sess['UserPhone'] = $user[0]->Phone;
                $sess['UserEmail'] = $user[0]->Email;
                $sess['UserFundraiserCode'] = $user[0]->FundraiserCode;
                $sess['UserGroupID'] = $user[0]->GroupID;
                $sess['UserFile'] = $user[0]->File;
                $sess['UserActive'] = $user[0]->Active;
                $sess['UserDeleted'] = $user[0]->Deleted;
                $sess['UserMenu'] = $semuamenu;
                session($sess);
                return redirect()->back()->withInput();
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

    public function register(Request $request)
    {
        return view('pages.login.register');
    }

    public function regValidation(Request $request)
    {
        request()->validate([
            'name' => 'required|min:2|max:50',
            'phone' => 'required|numeric|unique:donor',
            'email' => 'required|email|unique:donor',
            'password' => 'required',
            'confirm_password' => 'same:password',
        ], [
            'name.min' => 'Nama minimal 2 karakter',
            'name.max' => 'Nama maksimal 50 karakter.',
            'phone.unique' => 'Nomor Handphone sudah terdaftar',
            'email.unique' => 'Email sudah terdaftar',
            'confirm_password.same' => 'Password tidak cocok',
        ]);

        $donor['Name']        = $request->input('name');
        $donor['Phone']       = $request->input('phone');
        $donor['Email']       = $request->input('email');
        $donor['Password']    = bcrypt($request->password);
        $donor['FundraiserCode'] = $this->random_strings(5);
        $donor['CreatedDate']  = Carbon::now();
        $donor['UpdatedDate']  = Carbon::now();
        $donor['GroupID']      = 3;

        $cek = DB::table('donor')->insertGetId($donor);

        $user = DB::table('donor')
            ->where('ID', $cek)
            ->get()->toArray();

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
        $sess['UserName'] = $user[0]->Name;
        $sess['UserPhone'] = $user[0]->Phone;
        $sess['UserEmail'] = $user[0]->Email;
        $sess['UserFundraiserCode'] = $user[0]->FundraiserCode;
        $sess['UserGroupID'] = $user[0]->GroupID;
        $sess['UserFile'] = $user[0]->File;
        $sess['UserActive'] = $user[0]->Active;
        $sess['UserDeleted'] = $user[0]->Deleted;
        $sess['UserMenu'] = $semuamenu;
        session($sess);

        return redirect()->back();
    }

    function random_strings($length_of_string)
    {
        $str_result = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
        return substr(str_shuffle($str_result), 0, $length_of_string);
    }

    public function ceksesi(Request $request)
    {
        dd(session()->all());
    }
}
