<?php

namespace App\Http\Controllers\Guest\Portfolios;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PortfoliosController extends Controller
{
    public function IndexPortfolios()
    {
        return view('guest.menu.portfolios.index-portfolios');
    }   
}
