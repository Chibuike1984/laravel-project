<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;


//use Illuminate\Http\Request;

class PostController extends Controller
{

    public function deletepost(Post $post)
    {

        return ('welcome to laravel');

    }


    public function updateEdit(Post $post, Request $request)
    {

        
        $incomingpost = $request->validate([
            'title' => 'required',
            'body' =>'required'
        ]);

        $post->update($incomingpost);
        return redirect('/');

    }

    public function editpost(Post $post)
    {

        if(auth()->user()->id !== $post['user_id'])
        {
            return redirect('/');
        }

        return view('edit-post', ['post' => $post]);

    }

    public function createpost(Request $request)
    {
           $incomingpost['user_id'] = auth()->id();
           Post::create($incomingpost);
           return redirect('/');      
    }
}
