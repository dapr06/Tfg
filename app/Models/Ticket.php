<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Service;

class Ticket extends Model
{
    use HasFactory;
    public function services(){
        return $this->belongsToMany(Service::class)
            ->withPivot('number', 'price')
            ->withTimestamps();
    }
}

