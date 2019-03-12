<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    protected $fillable = ['name', 'breed', 'weight', 'owner_id'];

    public function owner()
    {
        return $this->belongsTo(Owner::class, 'owner_id');
    }
}
