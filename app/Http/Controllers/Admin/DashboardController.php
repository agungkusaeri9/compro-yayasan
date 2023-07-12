<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $count = [
            'user' => User::count(),
            'post' => Post::count(),
            'post_publish' => Post::where('status', 1)->count(),
            'post_unpublish' => Post::where('status', 1)->count(),
        ];
        return view('admin.pages.dashboard', [
            'title' => 'Dashboard',
            'count' => $count
        ]);
    }
}
