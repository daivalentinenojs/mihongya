<?php

namespace App\Http\Controllers\Guest\Events;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class EventsController extends Controller
{
    public function IndexEvents()
    {
        return view('guest.menu.events.index-events');
    }
}
