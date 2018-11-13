<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Consumable extends Model
{
    protected $fillable = ['name','category','size','quantity','stock_quantity','current_location','remarks','uom'];
}
