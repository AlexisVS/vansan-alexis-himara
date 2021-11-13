<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactForm extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function mails()
    {
        return $this->morphMany(Mailbox::class, 'mailable');
    }
}