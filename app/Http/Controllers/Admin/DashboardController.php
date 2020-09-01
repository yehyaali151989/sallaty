<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // $admin = Admin::find(auth('admin')->user()->id);
        return view('admin.pages.dashboard');
    }
}
