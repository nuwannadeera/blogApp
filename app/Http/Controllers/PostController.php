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

    public function editPost(Post $post) {
        return view('editPost', compact('post'));
    }

    public function updatePost(Request $request, Post $post) {
        $input = $request->all();
        if ($image = $request->file('image')) {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move("$destinationPath", "$profileImage");
            $input['image'] = "$profileImage";
        } else {
            unset($input['image']);
        }
        $post->update($input);
        return redirect()->route('post')
            ->with('success','Post updated successfully');
    }

    public function deletePost($id) {
        $post = Post::find($id);
        $post->delete();
        return redirect()->route('post')
            ->with('success','Post deleted successfully');
    }
}
