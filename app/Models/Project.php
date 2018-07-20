<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    


     public static function boot()
    {
        parent::boot();

        Project::observe(new \App\Observers\UserActionsObserver);
    }
}
