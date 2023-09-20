<?php

namespace App\Http\Controllers\Guest\Services;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function IndexServices()
    {
        return view('guest.menu.services.index-services');
    }   
}
