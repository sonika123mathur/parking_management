<?php

namespace App\Http\Controllers\admin;

use App\Post;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index() {
//        dd(session()->get('auth_token'));
        return view('admin.pages.dashboard');
    }
}
