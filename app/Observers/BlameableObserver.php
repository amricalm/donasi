<?php

namespace App\Observers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Session;

class BlameableObserver
{
    public function creating(Model $model)
    {
        $model->CreatedBy = Session::get('UserID');
        $model->UpdatedBy = Session::get('UserID');
    }
    public function updating(Model $model)
    {
        $model->updated_by = '3';
    }
    public function updated(Model $model)
    {
        $model->updated_by = '3';
    }
}
