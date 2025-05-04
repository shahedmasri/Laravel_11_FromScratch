<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

//use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $allCategories = Category::all();
        $categories = Category::all();
        $posts = Post::latest()->get();
        $posts = Post::where('category_id', request('category_id'))->latest()->get();

        return view('home', ['categories' => $allCategories]);
        return view('home', compact('categories', 'posts'));
    }

}
