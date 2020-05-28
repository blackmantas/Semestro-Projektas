<?php


namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Post;



class PostsController extends Controller
{
    public function show($slug)
    {
            return view('posts', [
                'post' => Post::where('slug', $slug)->firstOrFail()
            ]);
    }
}
