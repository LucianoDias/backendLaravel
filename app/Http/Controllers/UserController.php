<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Resources\UserResource;

class UserController extends Controller
{
    public function imdex()
    {
        $users = User::with('todos')->get();
        return UserResource::collection($users);
    }

    public function show(User $user)
    {
        $user->load('todos');
        return new UserResource($user);
    }
}
