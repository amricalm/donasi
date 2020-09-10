<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class Donate extends Model
{
    const created_at = 'CreatedDate';

    public $timestamps = true;
    protected $table = "donate";
    protected $fillable = ['ID','Amount','Payment','Name','Phone','Email','Message','CreatedDate'];
}
