<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
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
        $app['Donor'] = DB::table('donate')
                        ->selectRaw('ID, Name, Amount, CreatedDate, Message')
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
