<?php

namespace App\Http\Controllers;
use App\Models\Detection;
use App\Models\User;
use App\Models\Post;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard(){
        $detection = Detection::all();
        $all_user = Count(User::all());
        $post = Post::all();
        return view('admin.dashboard', [
            'user' => $all_user,
            'accuracy' => $detection->avg('accuracy'),
            'time_predict' => $detection->avg('time_predict'),
            'post_count' => Count($post),
            'post' => $post
        ]);
    }

    public function app(){
        $detection = Detection::all();
        return view('admin.app', [
            'data_detection' => $detection,
        ]);
    }
}
