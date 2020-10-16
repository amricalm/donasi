<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class Donor extends Model
{
    const CREATED_AT = 'CreatedDate';
    const UPDATED_AT = 'UpdatedDate';

    public $timestamps = true;
    protected $table = "donor";
    protected $fillable = ['ID','Name','Phone','Email','Password','FundraiserCode','Photo','GroupID','File','Active','Deleted','CreatedDate','UpdatedDate','CreatedBy','UpdatedBy'];
    
    protected $appends = ['referral_link'];
    public function referrer()
    {
        return $this->belongsTo(Donor::class, 'FundraiserCode', 'id');
    }

    public function referrals()
    {
        return $this->hasMany(Donor::class, 'FundraiserCode', 'id');
    }
    
    public function getReferralLinkAttribute()
    {
        return $this->referral_link = route('register', ['ref' => $this->username]);
    }

}
