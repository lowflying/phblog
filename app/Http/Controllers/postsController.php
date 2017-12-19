<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Post;

class postsController extends Controller
{

    public function index()
    {
        $posts = Post::all();

        return view('home', compact('posts'));
    }

    public function create(){

        return view('posts.create');
    }

    public function store(){
        

        Post::create([
            'title' => request('title'),
            'body' => request('body')
        ]);

        return redirect('/');

    }
}
