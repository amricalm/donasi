<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    const CREATED_AT = 'CreatedDate';
    const UPDATED_AT = 'UpdatedDate';

    protected $table = "mskaryawan";
    protected $fillable = [
        'ID', 'NamaLengkap', 'TglLahir', 'UnitKerja', 'TglMasuk', 'TglMasukUnit', 'Shift', 'CreatedBy', 'UpdatedBy'
    ];
}
