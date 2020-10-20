<?php

namespace App\Sitadok;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class VarGlobal extends Model
{
    const MAIL_TYPE_EKSTERNAL = 7;
    const MAIL_EKSTERNAL_IN = 1;
    const MAIL_EKSTERNAL_OUT = 2;

    const SEMUA_BAGIAN = 999;
    const SEMUA_KEBUN = 995;

    //LEVEL POSITION
    const DIREKSI = 1;
    const SEKDIR = 2;
    const KABAG = 3;
    const KASUBAG = 4;
    const STAFF = 5;
    const KASUBAG_SEKPER = 7;
    const KABAG_SEKPER = 6;

    //UNIT POSITION
    const UNIT_DIREKSI='Direksi';
    const UNIT_BAGIAN = 'Bagian';
    const UNIT_KEBUN = 'Kebun';

    //AKSI
    const SEND = 'SEND';
    const INITIAL = 'INITIAL';
    const SIGN_UB = 'SIGN_UB';
    const INITIAL_UB = 'INITIAL_UB';
    const SIGN = 'SIGN';
    const AGREE = 'AGREE';

    //EDIT SURAT
    const SURATINTERNALEDIT = 39;

    //JENIS SURAT
    const SURATINTERNAL     = 1;
    const MEMO              = 2;
    const SURATPERSONAL     = 3;
    const SURATPENEGASAN    = 4;
    const SURATEDARAN       = 5;
    const SURATKETERANGAN   = 6;
    const SURATEKSTERNAL    = 7;
    const SURATANAKPERUSAHAAN= 8;
    const SURATKOLEKTIF     = 9;
    const SURATTUGAS        = 10;
    const SURATKEPUTUSAN    = 11;
    const NOTULA            = 12;
    const SURATPERMOHONAN   = 13;
    const SURATJAMINANRS    = 14;
    const LEGALOPINI        = 15;
    const PAKTAINTEGRITAS   = 16;
    const SURATPKWT         = 17;
    const SURATPERINTAHJALAN= 18;
    const SURATTEGURAN      = 19;
    const SURATMOU          = 20;
    const SALINANSK         = 21;
    const SURATLAPORAN      = 22;
    const SURATBERITAACARA  = 23;
    const DOKUMENPENGADAAN  = 24;
    const DOKUMENTI         = 25;

    //Admin
    const ADMIN             = 10;

    public function Position()
    {
        $position = array(
            'Direktur Utama',
            'Direksi',
            'Sekretaris Direksi',
            'Kepala Bagian',
            'Kepala Sub Bagian',
            'Staff'
        );
    }
    public function bulan($month)
    {
        $bulan = array(
            'January' => 'Januari',
            'February' => 'Februari',
            'March' => 'Maret',
            'April' => 'April',
            'May' => 'Mei',
            'June' => 'Juni',
            'July' => 'Juli',
            'August' => 'Agustus',
            'September' => 'September',
            'October' => 'Oktober',
            'November' => 'November',
            'December' => 'Desember'
        );
        return ($month=='') ? $bulan : $bulan[$month];
    }
    public function romawi($angka='')
    {
        $romawi = array('1'=>"I",'2'=>"II",'3'=>"III",'4'=>"IV",'5'=>"V",'6'=>"VI",'7'=>"VII",'8'=>"VIII",'9'=>"IX",'10'=>"X",'11'=>"XI",'12'=>"XII");
        return ($angka=='') ? $romawi : $romawi[$angka];
    }
    public function iconfile($ext='')
    {
        $icon = array(
                'jpg'=>'fa fa-file-image-o',
                'gif'=>'fa fa-file-image-o',
                'png'=>'fa fa-file-image-o',
                'jpeg'=>'fa fa-file-image-o',
                'doc'=>'fa fa-file-word-o',
                'docx'=>'fa fa-file-word-o',
                'ppt'=>'fa fa-file-powerpoint-o',
                'pptx'=>'fa fa-file-powerpoint-o',
                'xls'=>'fa fa-file-excel-o',
                'xlsx'=>'fa fa-file-excel-o',
                'zip'=>'fa fa-file-zip-o',
                'rar'=>'fa fa-file-zip-o',
                'pdf'=>'fa fa-file-pdf-o',
                'txt'=>'fa fa-file-text',
                'other'=>'fa fa-file',
            );

        if($ext!='')
        {
            if(array_key_exists($ext,$icon)==1)
            {
                return $icon[$ext];
            }
            else
            {
                return $icon['other'];
            }
        }
        else
        {
            return $icon;
        }
    }
    public function status($katakunci='')
    {
        $status = array(
            'DRAFT' => 'DRAFT',
            'STF_SENDED' => 'Kasubag',
            'REVISED' => 'Direvisi',
            'SUB_INITIALED' => 'Paraf Kasubag',
            'SUB_AGREED' => 'Diketahui Kasubag',
            'SUB_SIGNED_UB' => 'TTD UB Kasubag',
            'SUB_INITIALED_UB' => 'Paraf UB Kasubag',
            'SUB_SENDED' => 'Kabag',
            'SUB_SENDED_UB' => 'Sekdir',
            'BAG_INITIALED' => 'Paraf Kabag',
            'BAG_SIGNED' => 'TTD Kabag',
            'BAG_SENDED' => 'Sekdir',
            'SEK_AGREED' => 'Disetujui Sekdir',
            'SEK_SENDED' => 'Direksi',
            'DIR_SIGNED' => 'TTD Direksi',
            'ACCORDED' => 'Terkirim',
            'DISPOSITION' => 'Disposisi',
        );
        return ($katakunci!='') ? $status[$katakunci] : $status;
    }
    public function statusSuratMasuk($katakunci='')
    {
        $status = array(
            'DRAFT' => 'DRAFT',
            'STF_SENDED' => 'Kasubag',
            'REVISED' => 'Direvisi',
            'SUB_INITIALED' => 'Paraf Kasubag',
            'SUB_SIGNED_UB' => 'TTD UB Kasubag',
            'SUB_SENDED' => 'Kabag',
            'SUB_SENDED_UB' => 'Sekdir',
            'BAG_SIGNED' => 'TTD Kabag',
            'BAG_SENDED' => 'Sekdir',
            'SEK_AGREED' => 'Disetujui Sekdir',
            'SEK_SENDED' => 'Diterima',
            'DIR_SIGNED' => 'TTD Direksi',
            'ACCORDED' => 'Diterima',
            'DISPOSITION' => 'Disposisi',
            'BAG_SENDED' => 'Diterima',
        );
        return ($katakunci!='') ? $status[$katakunci] : $status;
    }
    public function colorstatus($katakunci='')
    {
        $status = array(
            'DRAFT' => '#8b8b8b',
            'STF_SENDED' => '#6B05F9',
            'REVISED' => '#ff7814',
            'SUB_INITIALED' => '#79bbe7',
            'SUB_SIGNED_UB' => '#06e763',
            'SUB_SENDED' => '#b014ff',
            'SUB_SENDED_UB' => '#d4166c',
            'BAG_SIGNED' => '#6fe423',
            'BAG_SENDED' => '#d4166c',
            'SEK_AGREED' => '#06edcd',
            'SEK_SENDED' => '#415dfe',
            'DIR_SIGNED' => '#3d9cdd',
            'ACCORDED' => '#2ecc71',
            'DISPOSITION' => '#33d176',
        );
        return ($katakunci!='') ? $status[$katakunci] : $status;
    }

    public function getUnitCode($UnitID)
    {
        $hasil       = DB::table('unit')
                        ->whereRaw('ID ='. $UnitID)
                        ->value('UnitCode');
        return $hasil;
    }
    public function getUnitDireksi($UserID)
    {
        $hasil       = DB::table('user')
                        ->whereRaw('ID ='. $UserID)
                        ->value('UnitID');
        return $hasil;
    }
    public function getMailCode($MailTypeID)
    {
        $hasil       = DB::table('mailtype')
                        ->whereRaw('ID ='. $MailTypeID)
                        ->value('MailCode');
        return $hasil;
    }
    public function getUnit($TambahSemuaBagian = 0,$BagianSaja=0,$TambahSemuaKebun = 0,$KebunSaja=0)
    {
        $unit       = DB::table('unit')
                        ->selectRaw('ID,Name,UnitCode,UnitPosition');
                        
        if($BagianSaja==1)
        {
            $unit= $unit->whereRaw('UnitPosition = "Bagian"');
        }
        
        if($KebunSaja==1)
        {
            $unit= $unit->orwhereRaw('UnitPosition = "Kebun"');
        }
        
        if($BagianSaja==0 && $KebunSaja==0)
        {
            $unit = $unit;
        }
        
        $unit = $unit->whereRaw('(Deleted != 1 OR Deleted IS null)')
                        ->whereRaw('Active = 1')
                        ->orderBy('Name')->get();

        if($TambahSemuaBagian==1)
        {
            $tmp =(object)array('ID'=>VarGlobal::SEMUA_BAGIAN,'Name'=>'--- Semua Bagian ---','UnitCode'=>'','UnitPosition'=>'');
            $unit->prepend($tmp);
        }
        
        if($TambahSemuaKebun==1)
        {
            $tmp =(object)array('ID'=>VarGlobal::SEMUA_KEBUN,'Name'=>'--- Semua Kebun ---','UnitCode'=>'','UnitPosition'=>'');
            $unit->prepend($tmp);
        }
        $unit = $unit->toArray();
        return $unit;
    }

    public function getUnitFrom()
    {
        $unit       = DB::table('unit')
                        ->selectRaw('ID,Name,UnitCode,UnitPosition')
                        ->whereRaw('ID ='. session('UserUnitID') .' OR UnitPosition = "Direksi"')
                        ->whereRaw('(Deleted != 1 OR Deleted IS null)')
                        ->whereRaw('Active = 1')
                        ->orderBy('Name')->get()->toArray();
        return $unit;
    }

    public function getUnitFromSession()
    {
        $unit       = DB::table('unit')
                        ->selectRaw('ID,Name,UnitCode,UnitPosition')
                        ->whereRaw('ID ='. session('UserUnitID'))
                        ->whereRaw('(Deleted != 1 OR Deleted IS null)')
                        ->whereRaw('Active = 1')
                        ->orderBy('Name')->get()->toArray();
        return $unit;
    }

    public function getUnitToDireksi()
    {
        $unit       = DB::table('unit')
                        ->selectRaw('ID,Name,UnitCode,UnitPosition')
                        ->whereRaw('UnitPosition = "Direksi"')
                        ->whereRaw('(Deleted != 1 OR Deleted IS null)')
                        ->whereRaw('Active = 1')
                        ->orderBy('Name')->get()->toArray();
        return $unit;
    }

    public function getKabagUnit($UnitID=0)
    {
        $UID = 0;
        $q = DB::table('user')
                ->selectRaw('user.ID as UserID')
                ->join('position','user.PositionID','=','position.ID')
                ->whereRaw("(position.level=" .VarGlobal::KABAG." OR position.level =".VarGlobal::KABAG.")
                            AND user.UnitID = " . $UnitID )
                ->first();
        
        if($q!=null)
        {
            $UID = $q->UserID;
        }
        return $UID;
    }           
    public function getKabagID($StaffUserID=0)
    {
        $Hasil = 0;
        $KasubagID = DB::table('user')->where('ID',$StaffUserID)->value('ReportTo');
        if(!empty($KasubagID))
        {
            $KabagID = DB::table('user')->where('ID',$KasubagID)->value('ReportTo');
            if(!empty($KabagID))
            {
                $Hasil = $KabagID;
            }
        }
        return $Hasil;
    }

    public function getAtasanUnitID($BawahanID=0)
    {
        $Hasil = 0;
        $AtasanID = DB::table('user')->where('ID',$BawahanID)->value('ReportTo');
        if(!empty($AtasanID))
        {

            $q = DB::table('user')->where('ID',$AtasanID)->value('UnitID');
            $Hasil = $q;
        }
        return $Hasil;
    }

    public function CekStaff()
    {
        $hasil = false;
        if(session('UserLevel')==VarGlobal::STAFF)
        {
            $hasil = true;
        }
        return $hasil;
    }

    public function CekKasubag()
    {
        $hasil = false;
        if(session('UserLevel')==VarGlobal::KASUBAG || session('UserLevel')==VarGlobal::KASUBAG_SEKPER)
        {
            $hasil = true;
        }
        return $hasil;
    }

    public function CekKasubag2($UserID)
    {
        $q = DB::table('user')
                ->join('Position','Position.ID','=','user.PositionID')
                ->whereraw("user.ID=" . $UserID)
                ->value('Position.Level');
                
        $hasil = false;
        if($q==VarGlobal::KASUBAG || $q==VarGlobal::KASUBAG_SEKPER)
        {
            $hasil = true;
        }
        return $hasil;
    }

    public function CekKabag2($UserID)
    {
        $q = DB::table('user')
                ->join('Position','Position.ID','=','user.PositionID')
                ->whereraw("user.ID=" . $UserID)
                ->value('Position.Level');
                
        $hasil = false;
        if($q==VarGlobal::KABAG || $q==VarGlobal::KABAG_SEKPER)
        {
            $hasil = true;
        }
        return $hasil;
    }

    public function CekKabag()
    {
        $hasil = false;
        if(session('UserLevel')==VarGlobal::KABAG || session('UserLevel')==VarGlobal::KABAG_SEKPER)
        {
            $hasil = true;
        }
        return $hasil;
    }

    public function CekSekDir()
    {
        $hasil = false;
        if(session('UserLevel')==VarGlobal::SEKDIR)
        {
            $hasil = true;
        }
        return $hasil;
    }

    public function CekDir()
    {
        $hasil = false;
        if(session('UserLevel')==VarGlobal::DIREKSI)
        {
            $hasil = true;
        }
        return $hasil;
    }


    public function CekToDireksi($MailID)
    {
        $ToDireksi = 0;
        $To = DB::table('mailto')->whereRaw('MailID = '.$MailID. ' AND IsCopy = 0')->get()->toArray();
        for($i=0;$i<count($To);$i++)
        {
            $q = DB::table('unit')->where('ID', $To[$i]->UnitID)->first();
            if($q!= null)
            {
                if ($q->UnitPosition == VarGlobal::UNIT_DIREKSI)
                {
                    $ToDireksi = 1;
                    break;
                }
            }
        }
        return $ToDireksi;
    }

    public function CekFromDireksi($MailID)
    {
        $hasil = 0;
        $q = DB::table('mail')->whereRaw('ID = '.$MailID)->first();
        $unit = DB::table('unit')->where('ID',$q->MailFromID)->first();
        if ($unit->UnitPosition == VarGlobal::UNIT_DIREKSI)
        {
            $hasil = 1;
        }
        return $hasil;
    }
    public function CekSuratEdaran($mailTypeID)
    {
        $hasil = false;
        if($mailTypeID==VarGlobal::SURATEDARAN)
        {
            $hasil = true;
        }
        return $hasil;
    }
    public function Slug($string)
    {
        return strtolower(trim(preg_replace('~[^0-9a-z]+~i', '-', html_entity_decode(preg_replace('~&([a-z]{1,2})(?:acute|cedil|circ|grave|lig|orn|ring|slash|th|tilde|uml);~i', '$1', htmlentities($string, ENT_QUOTES, 'UTF-8')), ENT_QUOTES, 'UTF-8')), '-'));
    }


    public function build_sorter($key) {
        return function ($a, $b) use ($key) {
            return strnatcmp($b->$key, $a->$key);
        };
    }
    
    public function time_since($original)
    {
        date_default_timezone_set('Asia/Jakarta');
        $chunks = array(
            array(60 * 60 * 24 * 365, 'tahun'),
            array(60 * 60 * 24 * 30, 'bulan'),
            array(60 * 60 * 24 * 7, 'minggu'),
            array(60 * 60 * 24, 'hari'),
            array(60 * 60, 'jam'),
            array(60, 'menit'),
        );

        $today = time();
        $since = $today - $original;
        
        for ($i = 0, $j = count($chunks); $i < $j; $i++)
        {
            $seconds = $chunks[$i][0];
            $name = $chunks[$i][1];
        
            if (($count = floor($since / $seconds)) != 0)
            break;
        }
        
        $print = ($count == 1) ? '1 ' . $name : "$count {$name}";
        return $print . ' yang lalu';
    }

    public function CheckReferral($ref)
    {
        $q = DB::table('donor')
                ->whereraw("FundraiserCode='" . $ref."'")
                ->value('FundraiserCode');
                        
        $hasil = false;
        if($q == $ref)
        {
            $hasil = true;
        }
        return $hasil;
    }

}



class Notifikasi extends Mailable
{
    use Queueable, SerializesModels;

    protected $isi;
    protected $link;
    protected $tujuan;

    public function __construct($isi, $nama, $link)
    {
        $this->isi = $isi;
        $this->link = $link;
        $this->nama= $nama;
    }
    public function build()
    {
        return $this->from('sitadok@ptpn12.com')
                   ->view('pages.notifikasi.notifikasi_email')
                   ->subject('SITADOK (Notifikasi Surat)')
                   ->with(
                    [
                        'name' => $this->nama,
                        'content' => $this->isi,
                        'link' => $this->link
                    ]);

    }
}
