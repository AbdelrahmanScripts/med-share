<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index()
    {
        $user = User::paginate(20); ;
        return inertia('admins/Users/index', [
            'users' => $user
        ]);
    }

    public function show(User $user)
    {
        return inertia('admins/Users/show', [
            'user' => $user
        ]);
    }

    public function destroy(User $user)
    {
        $user->delete();
        return to_route('users.index');
    }
}
