<?php

namespace App\Http\Controllers\Guest\Gallery;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class GalleryController extends Controller
{
    public function IndexGallery()
    {
        return view('guest.menu.gallery.index-gallery');
    }
}
