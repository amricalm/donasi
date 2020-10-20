<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cookie;
use App\Http\Middleware\CheckReferral;
use App\Sitadok\VarGlobal;

class LandingPageController extends Controller
{
    public function __construct()
    {
        $varglobal = new VarGlobal();
        $this->global = $varglobal;
    }
    public function index()
    {
        // $referred_by = Cookie::get('referral');
        if(request()->filled('ref')) {
            $reqRef = request()->ref;
            if($this->global->CheckReferral($reqRef)) {
                $ref = $reqRef;
            }
        }else{
            $ref = '';
        }
        $app['Referrer']  = !empty($ref) ? '/?ref='.$ref : '';
        $app['Donor'] = DB::table('donate')
                        ->selectRaw('ID, Name, Amount, CreatedDate, Message')
                        ->orderByDesc('CreatedDate')
                        ->get()->toArray();
        
        $TimeSince = array();
        for($i=0;$i<count($app['Donor']);$i++)
        {
            $TimeSince[] = $this->global->time_since(strtotime($app['Donor'][$i]->CreatedDate));
        }
        $app['TimeSince'] = $TimeSince;
        return view('pages.landingpage',$app);
    }
}
