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
}
