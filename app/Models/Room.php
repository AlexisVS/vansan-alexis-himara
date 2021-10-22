<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    public function services () {
        return $this->belongsToMany(Room_categories::class, 'room_categories');
    }

    public function categories () {
        
    }
}