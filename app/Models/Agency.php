<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agency extends Model
{
    use HasFactory;

    public function Volunteers(){
        return $this->hasMany(Volunteer::class,'agency_id');
    }
}
