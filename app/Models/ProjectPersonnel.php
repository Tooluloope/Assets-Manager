<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProjectPersonnel extends Model
{
     public static function boot()
    {
        parent::boot();

        ProjectPersonnel::observe(new \App\Observers\UserActionsObserver);
    }
}
