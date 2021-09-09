<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    const CREATED_AT = 'CreatedDate';
    const UPDATED_AT = 'UpdatedDate';
    protected $table = "user";
    protected $fillable = ['Login', 'Name', 'Email', 'Password', 'GroupID', 'EmployeeID', 'Hp', 'File', 'Active', 'Deleted'];

    protected $hidden = [
        'Password', 'remember_token',
    ];

    public function getAvatar()
    {
        if (!$this->File) {
            return asset('files/assets/avatar-1.jpg');
        }
        return asset('photos/photo/' . $this->File);
    }
}
