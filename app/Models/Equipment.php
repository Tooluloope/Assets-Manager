<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Equipment extends Model
{	
   public $table= "equipments";
   protected $fillable = [ 'name','category','swl','size','inspected','validity','tag_no','current_location','status','responsible_person','remarks'];




   public function project()
    {
        return $this->hasOne(Project::class, 'id','current_location');
    }
}
