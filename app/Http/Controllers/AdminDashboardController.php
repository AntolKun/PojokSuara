<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    public function index()
    {
        $countPost = Post::count();
        $countUser = User::count();
        return view("dashboard", compact("countPost", "countUser"));
    }
}
