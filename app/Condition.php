<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Condition extends Model
{
    public function item()
    {
        return $this->hasMany(Item::class, 'condition_id');
    }
}
