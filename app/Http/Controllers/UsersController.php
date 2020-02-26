<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::orderBy('id', 'desc');
        
        return view('users.index', [
            'users' => $users,
        ]);
    }
    public function show($id)
    {
        $user = User::find($id);
        $tasks = $user->tasks()->orderBy('created_at', 'desc');
        
        $data = [
            'user' => $user,
            'tasks' => $tasks,
        ];
        
        $data += $this->counts($user);
        
        
        
        return view('users.show', $data);
    }
}
