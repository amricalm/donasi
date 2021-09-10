<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TesPolaMakan extends Model
{
    const CREATED_AT = 'CreatedDate';
    const UPDATED_AT = 'UpdatedDate';

    protected $table = "tespolamakan";
    protected $fillable = [
        'ID', 'Buah', 'PorsiBuah', 'Sayur', 'PorsiSayur', 'ProteinHewani', 'ProteinNabati', 'PorsiProtein',
        'SelainNasiHari', 'SelainNasiMinggu', 'MakananPokok', 'PorsiMakananPokok', 'CemilanManisHari', 'CemilanManisMinggu',
        'MinumanManisHari', 'MinumanManisMinggu', 'MinumanKemasanHari', 'MinumanKemasanMinggu', 'CemilanAsin',
        'Gorengan', 'Sarapan', 'AirPutih', 'LabelKemasan', 'CuciTanganMakan', 'CuciTanganSiapMakan',
        'CuciTanganBab', 'CuciTanganBak', 'CuciTanganPopok', 'TimbangBeratBadan'
    ];
    use Blameable;
}
