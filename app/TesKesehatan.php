<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TesKesehatan extends Model
{
    const CREATED_AT = 'CreatedDate';
    const UPDATED_AT = 'UpdatedDate';

    protected $table = "teskesehatan";
    protected $fillable = [
        'ID', 'IDKaryawan', 'TglTes', 'TglInput', 'Usia', 'TinggiBadan', 'BeratBadan', 'MassaTubuh', 'LemakTotal', 'LemakViseral',
        'Sistol', 'Diastol', 'GulaDarah', 'HbDarah', 'CreatedBy', 'UpdatedBy'
    ];
}
