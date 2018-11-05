<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProjectEquipment extends Model
{

	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [ 'project_id','equipment_id'];
    protected $table = 'project_equipment';
     public static function boot()
    {
        parent::boot();

        ProjectEquipment::observe(new \App\Observers\UserActionsObserver);
    }

     public function equipment()
    {
        return $this->hasOne(Equipment::class, 'id','equipment_id');
    }

     public function project()
    {
        return $this->hasOne(Project::class, 'id','project_id');
    }
}
