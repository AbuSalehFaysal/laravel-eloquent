<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function addPost(){
        return view('add-post');
    }

    public function createPost(Request $request) {
        $post = new Post();
        $post->title = $request->title; 
        $post->body = $request->body; 
        $post->save();
        return back()->with('post_created', 'Post successfully created');
    }

    public function getPost() {
        $posts = Post::orderBy('id', 'ASC')->get();
        return view('posts', compact('posts'));
    }

    public function getPostById($id) {
        $post = Post::where('id', $id)->first();
        return view('single-post', compact('post'));
    }

    public function deletePost($id){
        Post::where('id', $id)->delete();
        return back()->with('post_deleted', 'Post Deleted Successfully');
    }

    public function editPost($id){
        $post = Post::find($id);
        return view('edit-post', compact('post'));
    }

    public function updatePost(Request $request) {
        $post = Post::find($request->id);
        $post->title = $request->title;
        $post->body = $request->body;
        $post->save();
        return back()->with('post_updated', 'Post Updated Successfully!');
    }
}
