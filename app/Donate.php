<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Donate extends Model
{
    const created_at = 'CreatedDate';

    public $timestamps = true;
    protected $table = "donate";
    protected $fillable = ['ID','Invoice','DonorID','AccountNumber','Amount','Name','Phone','Email','Message','ReferrerID','CreatedDate','Unique','AmountUnique'];
    protected $dates = ['dob'];

    public function countVerifiedDonations($url='')
    {
        if($url == '')
        {
            $qry = DB::table('donate')
            ->selectRaw("count(ID) as Donate, sum(AmountUnique) as AmountUnique")
            ->first();
        } else {
            $qry = DB::table('donate')
                ->selectRaw("count(donate.ID) as Donate, sum(AmountUnique) as AmountUnique")
                ->join('mprogram','mprogram.ID','=','ProgramID')
                ->whereRaw('mprogram.Url ="'.$url.'"')
                ->first();
        }
        return $qry;
    }
}
