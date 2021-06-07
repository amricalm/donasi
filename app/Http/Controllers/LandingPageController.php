<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cookie;
use App\Http\Middleware\CheckReferral;
use Illuminate\Support\Facades\URL;
use App\Donasi\VarGlobal;
use App\Donate;
use App\Program;

class LandingPageController extends Controller
{
    public function __construct()
    {
        $varglobal = new VarGlobal();
        $donate    = new Donate();
        $program   = new Program();
        
        $this->global = $varglobal;
        $this->donate = $donate;
        $this->program = $program;

    }
    public function index()
    {
        $referred_by1 = request()->server();
        $referred_by2 = URL::previous();
        
        $ref = $this->global->HitsReferral();
        $app['Referrer']        = !empty($ref) ? '/?ref='.$ref : '';
        $app['Program']         = $this->program->GetAllActiveProgram();
        $app['ProgramCounter']  = $this->program->ProgramCounter();

        return view('pages.landingpage',$app);
    }

    public function program($url)
    {
        $referred_by1 = request()->server();
        $referred_by2 = URL::previous();
        
        $ref                    = $this->global->HitsReferral();
        $app['Referrer']        = !empty($ref) ? '/?ref='.$ref : '';
        $checkProgram           = $this->program->checkProgram($url);
        $app['Donor']           = $this->program->GetDonor($checkProgram->ID);
        $app['Fundraiser']      = $this->program->GetFundraiser($checkProgram->ID);
        $app['Program']         = $this->program->GetProgram($url);
        $app['ProgramCounter']  = $this->program->ProgramCounter();
                        
        if(session('ProgramID') != $app['Program']->ID) {
            session()->flush();
        }
        $sess['ProgramID'] = $app['Program']->ID;
        $sess['ProgramName'] = $app['Program']->Name;
        if(!empty($ref)) {
            $sess['FundraiserCode'] = $ref;
        }
        session($sess);
        
        $TimeSince = array();
        for($i=0;$i<count($app['Donor']);$i++)
        {
            $TimeSince[] = $this->global->time_since(strtotime($app['Donor'][$i]->CreatedDate));
        }
        $app['TimeSince'] = $TimeSince;

        if(!empty($app['Program'])) {
            return view('pages.program',$app);
        } else {
            return redirect('/'.$url);
        }
    }
}
