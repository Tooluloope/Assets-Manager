<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Calibration extends Model
{
    protected $fillable = ['equipment_id','calibration_frequency','last_calibrated','calibration_due_date','calibration_type','calibration_by'];
}
