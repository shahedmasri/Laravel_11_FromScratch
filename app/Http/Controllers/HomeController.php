<?php

namespace App\Http\Controllers;

use App\Models\Category; // تأكد من أن المسار صحيح
use App\Models\Post;     // نفس الشيء لـ Post
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $allCategories = Category::all();
        $categories = Category::all();

        $posts = Post::when(request('category_id'), function($query) {
            $query->where('category_id', request('category_id'));
        })->latest()->get();

        return view('home', [
            'categories' => $allCategories,
            'posts' => $posts
        ]);
    }
}
