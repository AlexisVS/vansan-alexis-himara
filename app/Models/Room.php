<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    public function services()
    {
        return $this->belongsToMany(Room_service::class, 'room_service_rooms')
        ->withPivot('available');
    }

    public function categories()
    {
        return $this->belongsTo(Room_categories::class, 'room_category_id');
    }

    public function images()
    {
        return $this->hasMany(Room_image::class);
    }

    public function reviews()
    {
        return $this->hasMany(Room_review::class);
    }
}
