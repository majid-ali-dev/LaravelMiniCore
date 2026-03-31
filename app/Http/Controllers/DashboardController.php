<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Post;
use App\Models\User;

class DashboardController extends BaseController
{
    public function index()
    {
        $totalUsers = User::where('role', 'user')->count();
        $totalPosts = Post::count();
        $myPosts = Post::where('user_id', Auth::id())->count();

        return view('dashboard', compact('totalUsers', 'totalPosts', 'myPosts'));
    }
}