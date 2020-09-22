<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    const CREATED_AT = 'CreatedDate';
    const UPDATED_AT = 'UpdatedDate';

    protected $table = "group";

    protected $fillable = ['Name','CreatedBy','UpdatedBy'];
    public $timestamps = true;
}
