<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public $timestamps = false;

//    public function program()
//    {
//        return $this->belongsTo(Program::class, 'role_id');
//    }

    public function user()
    {
        return $this->hasMany(User::class, 'role_id');
    }
}
