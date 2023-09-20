<?php

namespace App\Http\Controllers\Guest\Blog;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function IndexBlog()
    {
        return view('guest.menu.blog.index-blog');
    }
}
