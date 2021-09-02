<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TesKesPro extends Model
{
    const CREATED_AT = 'CreatedDate';
    const UPDATED_AT = 'UpdatedDate';

    protected $table = "teskespro";
    protected $fillable = [
        'ID', 'Rokok', 'LamaRokok', 'BanyakRokok', 'IndexRokok',
        'TempatRokok', 'BebanKerjaHaid', 'CutiHaid', 'JumlahAnak', 'Baduta',
        'UsiaBaduta', 'AsiBaduta', 'LamaAsiBaduta', 'MemerahAsi', 'TempatMemerahAsi',
        'IzinMemerahAsi', 'HambatanMemerahAsi', 'AsiEkslusif', 'UsiaDiberiSusu',
        'AlasanDiberiSusu', 'HambatanAsi', 'UsiaMpAsi', 'JenisMpAsi', 'HambatanMpAsi',
        'BeratHamil', 'PeriksaHamil', 'TempatPeriksa', 'JumlahPeriksa', 'HambatanPeriksa',
        'BebanKerjaHamil', 'CutiUsiaHamil', 'LamaCutiHamil', 'YankesNifas', 'YankesNifasDari',
        'JumlahYankes', 'BebanKerjaNifas', 'Kb', 'JenisKb', 'YankesKb', 'CreatedBy', 'UpdatedBy'
    ];
}
