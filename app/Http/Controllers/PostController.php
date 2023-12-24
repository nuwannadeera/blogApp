<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller {
    function post() {
        $postList = Post::all();
        return view('post')->with('postList', $postList);
    }

    function savePost(Request $request) {
        $request->validate([
            'content' => 'required',
            'image' => 'required',
            'title' => 'required|max:100',
            'author' => 'required'
        ]);

        $input = $request->all();
        if ($image = $request->file('image')) {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move("$destinationPath", "$profileImage");
            $input['image'] = "$profileImage";
        }
        Post::create($input);
        return redirect(route('post'));
    }
}
