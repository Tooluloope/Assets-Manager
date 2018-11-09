<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Basket extends Model
{
    protected $fillable = ['name','category','tag_no','size','current_location','content','remarks'];
}
