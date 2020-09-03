<?php
namespace App\Http\Middleware;
use Closure;
use Illuminate\Support\Facades\DB;
class cekRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $cek = 0;
        if(!empty(session('UserGroupID')))
        {
            $roles = DB::table('role')
                ->where('GroupID',session('UserGroupID'))
                ->join('sysmodule','ModuleID','=','sysmodule.ID')
                ->select('*')
                ->get();
            foreach($roles as $role)
            {
                if($role->Url == $request->path())
                {
                    $cek = 1;
                }
                else
                {
                    $path = explode('/',$request->path());
                    if(count($path)>=3)
                    {
                        $cekpath = $path[0].'/'.$path[1];                        
                        if($role->Url == $cekpath)
                        {
                            $cek = 1;
                        }
                    }
                }
            }
        }
        else
        {
            return redirect('aman')->with('Login','Silahkan login kembali!');
        }
        if(session('UserGroupID')=='9')
        {
            $cek = 1;
        }
        if($cek==1)
        {
            return $next($request);
        }
        else
        {
            return redirect('beranda')->with('alert','Tidak boleh akses halaman tsb! Cek ke Admin!');
        }
    }
}