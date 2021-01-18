<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Item;
use App\Category;

class InfoController extends Controller
{
    public function about()
    {
        $user = User::findorfail(3);

        return view('info.about', [
            'user' => $user
        ]);
    }
    public function categories()
    {
        $categories = Category::orderBy('id', 'asc')->where('id','>',1)->get();

        return view('info.categories', [
            'categories' => $categories
        ]);
    }
    public function detail($id)
    {
        $category = Category::findorfail($id);

        return view('info.detail', [
            'category' => $category
        ]);
    }

    
}
