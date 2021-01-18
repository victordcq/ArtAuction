<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Item;

class UserController extends Controller
{
    
    public function overview()
    {
        $users = User::orderBy('id', 'asc')->get();

        return view('users.overview', [
            'users' => $users
        ]);
    }

    public function detail($id)
    {
        $users = User::findorfail($id);

        return view('users.detail', [
            'users' => $users
        ]);
    }

    public function items($id)
    {
        $user = User::findorfail($id);
        $items = $user->items;

        return view('users.items', [
            'user' => $user,
            'items' => $items
        ]);
    }
}
