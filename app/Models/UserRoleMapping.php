<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
* Maps each user to a list of roles for the admin panel
*/
class UserRoleMapping extends Model
{
    protected $table = 'current_roles';

    public $timestamps = false;



    public function roles()
    {
        return $this->belongsToMany('App\Models\User');
    }
}
