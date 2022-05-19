<?php

namespace App\Repositories;

use App\Models\Post;
use App\Contracts\PostContract;
use Illuminate\Support\Facades\Auth;

class PostRepository implements PostContract
{
    public function getAll()
    {
        $posts = Post::with('user')
            ->orderBy('created_at', 'desc')
            ->paginate(6);
        return $posts;
    }

    public function getCount()
    {
        $posts = Post::with('user')
            ->orderBy('created_at', 'desc')
            ->count();
        return $posts;
    }
}
