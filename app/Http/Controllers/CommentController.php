<?php

namespace App\Http\Controllers;

use App\Repositories\CommentRepository;

class CommentController extends Controller
{
    public function index(CommentRepository $commentRepository)
    {
        $comments = $commentRepository->getAll();
        return view(
            'comment.index',
            compact('comments')
        )->with('successMsg', 'Comment Guest total: ' . $commentRepository->getCount());
    }
}
