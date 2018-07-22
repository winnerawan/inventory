<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stuff extends Model
{
    public function program()
    {
        return $this->belongsTo(Program::class, 'program_id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function item()
    {
        return $this->hasMany(Item::class, 'stuff_id');
    }
}
