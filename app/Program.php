<?php

namespace App;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    const CREATED_AT = 'CreatedDate';
    const UPDATED_AT = 'UpdatedDate';

    protected $table = "mprogram";

    protected $fillable = ['ID','Name','Summary','Description','Url','Banner','CreatedBy','UpdatedBy'];
    public $timestamps = true;

    public function checkProgram($url)
    {
        $qry = DB::table('mprogram')
        ->selectRaw("ID")
        ->whereRaw("Url ='".$url."'")
        ->first();
        
        return $qry;
    }
}
