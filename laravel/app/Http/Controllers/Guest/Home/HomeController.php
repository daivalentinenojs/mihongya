<?php

namespace App\Http\Controllers\Guest\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function IndexHome()
    {
        return view('guest.menu.home.index-home');
    }
}
