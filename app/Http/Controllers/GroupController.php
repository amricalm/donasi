<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Group;

class GroupController extends Controller
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
        $group          = Group::get(['ID','Name']);

        $app['judul']   = 'Daftar Group';
        $app['aktif']   = 'group';
        $app['isi']     = compact('group');

        return view('pages.group.index',$app);
    }

    public function tambah()
    {
        $app['judul']   = 'Tambah Group';
        $app['aktif']   = 'group/tambah';
        return view('pages.group.tambah',$app);
    }

    public function add_exec(Request $request)
    {
        $id = Group::create([
            'Name' => $request->nama,
            'CreatedBy' => Session::get("UserID"),
            'UpdatedBy' => Session::get("UserID")
        ])->id;

        return redirect('group/edit/'.$id);
    }

    public function edit($id)
    {
        $group          = Group::where('ID', $id)->get();
        $app['detailgroup']    = DB::table('role')
            ->selectRaw('sysmodule.ID,GroupID,`Name`,Url,Icon,ParentID')
            ->join('sysmodule','ModuleID','=','sysmodule.ID')
            ->where('GroupID','=',$id)
            ->orderByRaw('ParentID,Name')
            ->get()->toArray();
        // dd(DB::getQueryLog());
        $app['module']      = DB::table('sysmodule')->get()->toArray();
        $app['judul']       = 'Edit Group';
        $app['aktif']       = 'group/edit';
        $app['isi']         = compact('group');
        return view('pages.group.edit',$app);
    }

    function replaceMenu($id)
    {
        $semuamenu = array();
        $menus = DB::table('role')
            ->select('*')
            ->join('sysmodule','ModuleID','=','sysmodule.ID')
            ->where('GroupID',$id);
        $menus = $menus->whereRaw('Type = "Menu"')->whereNull('ParentID')->get();
        $menus = collect($menus)->map(function($x){ return (array) $x; })->toArray();
        for($i=0;$i<count($menus);$i++)
        {
            $semuamenu[$i] = $menus[$i];
            $menus1 = $this->getMenu($id,$menus[$i]['ID']);
            $menus1 = collect($menus1)->map(function($y){ return (array) $y; })->toArray();
            $semuamenu[$i]['child'] = array();
            if(count($menus1)>0)
            {
                $semuamenu[$i]['child'] = $menus1;
                for($j=0;$j<count($menus1);$j++)
                {
                    //cari cucu menu
                    $menus2 = $this->getMenu($id,$menus1[$j]['ID']);
                    $menus2 = collect($menus2)->map(function($z){ return (array) $z; })->toArray();
                    $semuamenu[$i]['child'][$j]['child'] = array();
                    if(count($menus2)>0)
                    {
                        $semuamenu[$i]['child'][$j]['child'] = $menus2;
                        for($k=0;$k<count($menus2);$k++)
                        {
                            //cari grand cucu menu
                            $menus3 = $this->getMenu($id,$menus2[$k]['ID']);
                            $menus3 = collect($menus3)->map(function($z){return(array)$z;})->toArray();
                            $semuamenu[$i]['child'][$j]['child'][$k]['child'] = array();
                            if(count($menus3)>0)
                            {
                                $semuamenu[$i]['child'][$j]['child'][$k]['child'] = $menus3;
                                for($l=0;$l<count($menus3);$l++)
                                {
                                    //cari grand cucu menu
                                    $menus4 = $this->getMenu($id,$menus3[$l]['ID']);
                                    $menus4 = collect($menus4)->map(function($z){return(array)$z;})->toArray();
                                    $semuamenu[$i]['child'][$j]['child'][$k]['child'][$l]['child'] = array();
                                    if(count($menus4)>0)
                                    {
                                        $semuamenu[$i]['child'][$j]['child'][$k]['child'][$l]['child'] = $menus4;
                                    }
                                }
                            }
                        }
                    }
                }

            }
        }
        session()->pull('UserMenu', 'default');
        $sess['UserMenu'] = $semuamenu;
        session($sess);
    }
    function getMenu($groupID,$parentID)
    {
        return DB::table('role')
            ->select('*')
            ->join('sysmodule','ModuleID','=','sysmodule.ID')
            ->where('GroupID',$groupID)
            ->where('Type','Menu')
            ->where('ParentID',$parentID)
            ->get();
    }
    public function edit_exec(Request $request)
    {
        Group::where('ID', $request->id)->update([
            'Name' => $request->nama,
            'UpdatedBy' => Session::get("UserID")
        ]);
        $datarole = array();
        $cb     = $request->cekbox;
        $read   = isset($request->read) ? $request->read : '';
        for($i=0;$i<count($cb);$i++)
        {   
            $datarole[$i] = array('GroupID'=>$request->id,'ModuleID'=>$cb[$i]);
        }
        DB::table('role')->where('GroupID','=',$request->id)->delete();
        // dd($cb);
        DB::table('role')->insert($datarole);
        // $this->replaceMenu($request->id);
        return redirect('group/edit/'.$request->id);
    }

    public function hapus($id)
    {
        Group::where('ID', $id)->delete();
        DB::table('role')->where('GroupID','=',$id)->delete();
        return redirect('group');
    }
}
