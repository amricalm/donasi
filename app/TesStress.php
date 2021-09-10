<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TesStress extends Model
{

    const CREATED_AT = 'CreatedDate';
    const UPDATED_AT = 'UpdatedDate';

    protected $table = "tesstress";
    protected $fillable = [
        'ID', 'TidakAmanKerja', 'PengaruhNegatif', 'BanyakKerja', 'SulitBeraspirasi', 'Tertekan',
        'Beraspirasi', 'Penghargaan', 'MaanfaatBakat'
    ];
    use Blameable;
}
