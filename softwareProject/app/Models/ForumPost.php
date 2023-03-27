<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ForumPost extends Model
{
    use HasFactory;

    protected $table = 'forum_posts';

    public function forumPost()
    {
        return $this->belongsTo(ForumPost::class);
    }

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    // one-to-many
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    
}
