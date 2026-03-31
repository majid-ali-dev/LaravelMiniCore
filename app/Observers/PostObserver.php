<?php

namespace App\Observers;

use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class PostObserver
{
    public function creating(Post $post): void
    {
        $post->user_id = Auth::id();
        $post->title = ucwords(trim($post->title));
    }

    public function updating(Post $post): void
    {
        $post->title = ucwords(trim($post->title));
    }

    public function deleting(Post $post): void
    {
        // Simple demo for learning
        // You can later add log/cleanup here if needed
    }
}