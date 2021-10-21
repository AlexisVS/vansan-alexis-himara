<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public function tags () {
        return $this->belongsToMany(Post_tag::class, 'post_tag_post');
    }

    public function categories () {
        return $this->belongsTo(Post_category::class);
    }
}
