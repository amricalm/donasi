<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TesFisik extends Model
{
    const CREATED_AT = 'CreatedDate';
    const UPDATED_AT = 'UpdatedDate';

    protected $table = "tesfisik";
    protected $fillable = [
        'ID', 'PosisiKerja', 'TipeKerja', 'CreatedBy', 'UpdatedBy'
    ];
}
