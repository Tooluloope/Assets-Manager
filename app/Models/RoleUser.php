<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Role;
class RoleUser extends Model
{
    public $table = 'role_user';

    public function role()
    {
        return $this->hasOne(Role::class, 'id','role_id');
    }
}
