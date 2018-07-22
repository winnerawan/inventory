<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    public function condition()
    {
        return $this->belongsTo(Condition::class, 'condition_id');
    }

    public function stuff()
    {
        return $this->belongsTo(Stuff::class, 'stuff_id');
    }

    public function repair()
    {
        return $this->hasMany(Repair::class, 'item_id');
    }
}
