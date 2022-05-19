<?php

namespace App\Repositories;

use App\Models\User;
use App\Contracts\UserContract;
use Illuminate\Support\Facades\DB;

class UserRepository implements UserContract
{
    public function getAll()
    {
        $users = User::with('comments')->paginate(6);
        // $users = User::paginate(6);
        // dd($users);
        return $users;
    }

    public function getCount()
    {
        $users = User::with('comments')->count();
        return $users;
    }
}
