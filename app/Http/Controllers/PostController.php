<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\post;
use App\Models\User;
use Clockwork\Storage\Search;

class PostController extends Controller
{
    public function index()
    {
        $title = '';
        if (request('category')) {
            $category = Category::firstWhere('slug', request('category'));
            $title = ' in ' . $category->name;
        }
        if (request('author')) {
            $author = User::firstWhere('username', request('author'));
            $title = ' by ' . $author->name;
        }

        return view('Post', [
            "title" => "All Post" . $title,
            "active" => 'post',
            "posts" => Post::latest()->filter(request(['search', 'category', 'author']))->paginate(7)->withQueryString()
            // "posts" => Post::all()
        ]);
    }

    public function show(post $post)
    {
        return view('article', [
            "title" => "Single Post",
            "active" => 'post',
            "post" => $post
        ]);
    }
}
