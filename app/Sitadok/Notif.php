<?php

namespace App\Sitadok;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Notif extends Model
{
    public function simpanNotif($data)
    {
        return DB::table('queue')
            ->insert($data);
    }
    public function cekNotif($id)
    {
        return DB::table('queue')
            ->where('ToID','=',session('UserID'))
            ->where('Read','=','0');
    }
    public function readNotif($id)
    {
        // $data['read'] = 1;
        return DB::table('queue')
            ->where('id','=',$id)
            ->update(array('Read'=>1));
    }
}
