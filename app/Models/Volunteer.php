<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Volunteer extends Model
{
    use HasFactory;

    public function Agencies(){
        return $this->belongsTo(Agency::class);
    }

    public function User(){
        return $this->belongsTo(User::class);
    }
}
