<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Repair extends Model
{
    public function item()
    {
        return $this->belongsTo(Item::class, 'item_id');
    }
}
