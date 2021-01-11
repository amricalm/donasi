<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cookie;
use App\Http\Middleware\CheckReferral;
use Illuminate\Support\Facades\URL;
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
        $referred_by1 = request()->server();
        $referred_by2 = URL::previous();
        // if($referred_by1 != url::) {

        // }
        // dd($referred_by2, $referred_by1);
        
        $ref = $this->global->HitsReferral();
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
