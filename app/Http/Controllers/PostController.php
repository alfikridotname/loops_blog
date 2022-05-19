<?php

namespace App\Http\Controllers;

use App\Repositories\PostRepository;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(PostRepository $postRepository)
    {
        $posts = $postRepository->getAll();
        return view('post.index', compact('posts'))->with('successMsg', 'Post total: ' . $postRepository->getCount());
    }
}
