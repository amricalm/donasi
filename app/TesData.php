<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TesData extends Model
{
    const CREATED_AT = 'CreatedDate';
    const UPDATED_AT = 'UpdatedDate';

    protected $table = "tesdata";
    protected $fillable = [
        'ID', 'TglInput', 'Petugas', 'IDKaryawan', 'IDTesKesehatan', 'IDTesKespro', 'IDTesFisik', 'IDTesPolaMakan'
    ];
    use Blameable;
}
