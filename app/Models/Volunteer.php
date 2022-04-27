<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Volunteer extends Model
{
    use HasFactory;

    public function Agencies(){
        return $this->hasMany(Agency::class,'agency_id');
    }

    public function User(){
        return $this->belongsTo(User::class);
    }
}
