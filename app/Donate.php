<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class Donate extends Model
{
    const created_at = 'CreatedDate';

    public $timestamps = true;
    protected $table = "donate";
    protected $fillable = ['ID','Invoice','DonorID','AccountNumber','Amount','Name','Phone','Email','Message','ReferrerID','CreatedDate'];
    protected $dates = ['dob'];
}
