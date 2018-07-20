<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Personnel extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [ 'name','email','company','designation','category','employment_status','t_bosiet','t_bosiet_validity_date','osp','osp_validity_date','general_medicals','general_medicals_validity_date','tuberculosis','tuberculosis_validity_date','cv'];



     public static function boot()
    {
        parent::boot();

        Personnel::observe(new \App\Observers\UserActionsObserver);
    }

}
