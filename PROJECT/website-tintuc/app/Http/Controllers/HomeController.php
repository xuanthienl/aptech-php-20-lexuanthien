<?php

namespace App\Http\Controllers;

use App\Home;
use Illuminate\Http\Request;
use App\Category;
use App\Post;

use Illuminate\Support\Collection;


class HomeController extends Controller
{
    function TrangChu() {
       
        $category = Category::get();
        $post = Post::get();
        return view('home.trangchu', ['categories' => $category, 'posts' => $post]);
    }
}