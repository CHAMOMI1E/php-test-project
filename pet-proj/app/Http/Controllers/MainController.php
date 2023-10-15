<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home()
    {
        $posts = new Posts();

        return view('home', ['posts' => $posts->all()]);
    }

    public function add_post()
    {
        return view('form');
    }

    public function post_valid(Request $request)
    {
        $valid = $request->validate([
            'theme' => 'required|min:20',
            'smth' => 'required|min:50'
        ]);
        $post = new Posts();
        $post->theme = $request->input('theme');
        $post->text = $request->input('smth');

        $post->save();

        return redirect()->route('home');
    }

    public function reader($id)
    {
        $post= Posts::find($id);
        return view('read', ['post' => $post]);

    }
}
