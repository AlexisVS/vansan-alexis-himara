<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room_categories extends Model
{
    use HasFactory;

    public function rooms () {
        return $this->hasMany(Room::class, 'room_category_id');
    }
}
