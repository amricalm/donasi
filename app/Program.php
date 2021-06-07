<?php

namespace App;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    const CREATED_AT = 'CreatedDate';
    const UPDATED_AT = 'UpdatedDate';

    protected $table = "mprogram";

    protected $fillable = ['ID','Name','Summary','Description','Url','Banner','CreatedBy','UpdatedBy', 'Active', 'DonationTarget','StartDate','EndDate'];
    public $timestamps = true;

    public function checkProgram($url)
    {
        $qry = DB::table('mprogram')
        ->selectRaw("ID")
        ->whereRaw("Url ='".$url."'")
        ->first();
        
        return $qry;
    }

    public function GetAllActiveProgram()
    {
        $qry = DB::table('mprogram')
                ->selectRaw('mprogram.ID, mprogram.Name,Summary,Description,Url,Banner, donate.AmountUnique, ROUND(AmountUnique / mprogram.DonationTarget * 100,0) AS Percent, DATEDIFF(EndDate, CURRENT_DATE()) + 1 AS DaysLeft')
                ->leftJoin(DB::raw('(SELECT ProgramID, SUM(AmountUnique) AS AmountUnique
                                    FROM donate
                                    GROUP BY ProgramID)donate'),
                function($leftJoin)
                {
                    $leftJoin->on('mprogram.ID', '=','donate.ProgramID');
                })
                ->whereRaw('mprogram.Active = 1')
                ->orderByDesc('mprogram.CreatedDate')
                ->get()->toArray();
        return $qry;
    }

    public function ProgramCounter()
    {
        $qry = DB::table('donate')
                ->selectRaw('COUNT(DISTINCT mprogram.ID) AS CountProgram, COUNT(donate.ID) AS CountDonate, SUM(AmountUnique) AS AmountUnique')
                ->Rightjoin('mprogram','mprogram.ID','=','donate.ProgramID')
                ->whereRaw('mprogram.Active = 1')
                ->first();
        return $qry;
    }

    public function GetProgram($url) 
    {
        $qry = DB::table('mprogram')
                ->selectRaw('mprogram.ID, mprogram.Name,Summary,Description,Url,Banner, donate.AmountUnique, donate.CountDonate , ROUND(AmountUnique / mprogram.DonationTarget * 100,0) AS Percent, DATEDIFF(EndDate, CURRENT_DATE()) + 1 AS DaysLeft')
                ->leftJoin(DB::raw('(SELECT ProgramID, SUM(AmountUnique) AS AmountUnique, COUNT(donate.ID) AS CountDonate
                                    FROM donate
                                    GROUP BY ProgramID)donate'),
                function($leftJoin)
                {
                    $leftJoin->on('mprogram.ID', '=','donate.ProgramID');
                })
                ->whereRaw('Url ="'.$url.'"')
                ->orderByDesc('mprogram.CreatedDate')
                ->first();
        return $qry;
    }

    public function GetFundraiser($programID) {
        $qry = DB::table('donor')
                ->selectRaw('donor.ID, donor.Name, donor.FundraiserCode, COUNT(donate.ID) AS CountDonor, SUM(AmountUnique) AS Total')
                ->join('donate','donor.FundraiserCode','=','donate.FundraiserCode')
                ->whereRaw('donor.ProgramID ='.$programID)
                ->groupBy('donor.ID')
                ->get()->toArray();
        return $qry;
    }

    public function GetDonor($programID) {
        $qry = DB::table('donate')
                ->selectRaw('ID, Name, Amount, CreatedDate, Message')
                ->whereRaw('ProgramID ='.$programID)
                ->orderByDesc('CreatedDate')
                ->get()->toArray();
        return $qry;
    }
}
