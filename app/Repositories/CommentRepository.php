<?php

namespace App\Repositories;

use App\Models\Comment;
use App\Contracts\CommentContract;

class CommentRepository implements CommentContract
{
    public function getAll()
    {
        $comments = Comment::whereNotIn('name', function ($query) {
            $query->select('name')->from('users');
        })->paginate(6);
        return $comments;
    }

    public function getCount()
    {
        $comments = Comment::whereNotIn('name', function ($query) {
            $query->select('name')->from('users');
        })->count();
        return $comments;
    }
}
