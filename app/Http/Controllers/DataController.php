<?php

namespace App\Http\Controllers;

use App\Models\Post;

class DataController extends Controller {

//    get all posts & comments
    public function allData() {
        $posts = Post::with('comments')->get();
        dd($posts);
        return response()->json($posts);
    }

//    retrieves the posts along with their comments
    public function getPostsWithComments() {
        // Fetch posts along with their comments using the defined relationship
        $posts = Post::with('comments')->get();
        return response()->json(['data' => $posts], 200);
    }
}
