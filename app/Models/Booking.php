<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    public function mails()
    {
        return $this->morphMany(Mailbox::class, 'mailable');
    }

    public function users () {
        return $this->belongsTo(User::class, 'user_id');
    }
}
