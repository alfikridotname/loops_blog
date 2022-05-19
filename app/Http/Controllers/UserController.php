<?php

namespace App\Http\Controllers;

use App\Repositories\UserRepository;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(UserRepository $userRepository)
    {
        $users = $userRepository->getAll();
        return view(
            'user.index',
            compact('users')
        )->with('successMsg', 'User with comment total: ' . $userRepository->getCount());
    }
}
