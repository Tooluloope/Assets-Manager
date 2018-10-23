<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Equipment extends Model
{	
   public $table= "equipments";
   protected $fillable = [ 'name','category','quantity','swl','size','inspected','validity','tag_no','current_locaton','status','responsible_person','remarks'];

}
