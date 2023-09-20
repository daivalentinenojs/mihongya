<?php

namespace App\Http\Controllers\User\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function IndexDashboardAdmin()
    {
        $role = 'Admin';
        return view('user.menu.dashboard.index-dashboard', compact('role'));
    }

    public function IndexDashboardUser()
    {
        $role = 'User';
        return view('user.menu.dashboard.index-dashboard', compact('role'));
    }
}
