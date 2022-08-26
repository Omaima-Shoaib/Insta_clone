<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Post;
use App\Models\SavedPost;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SavedPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userid = Auth::id();
        $username = Auth::user()->name;
        //	dd($userid);


        $countsavedposts = SavedPost::where('user_id', '=', $userid)->count();
        if ($countsavedposts > 0) {
            $savedposts = SavedPost::where('user_id', '=', $userid)->get();
            $posts = Post::join('saved_posts', 'saved_posts.post_id', '=', 'posts.id')->where('saved_posts.user_id', '=', $userid)->get();

            // return view('savedposts.index',['posts'=>$savedposts]);

            return view('savedposts.index', ['posts' => $posts, 'savedposts' => $savedposts]);
        } else {
            return view('savedposts.empty');
        }
        //  return $savedposts;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Post $post)
    {
        // dd($request->user()->id);
        dd($request);
        // return redirect('posts.create')
        // return 'stored';
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $myurl = url()->previous();

        //this function will store the user_id and post_id in the saved_posts table
        // dd($request['post_id']);
        // dd($request->user()->id);
        $user_id = $request->user()->id;
        $post_id = $request['post_id'];
        $savedpost = new SavedPost([
            'post_id' => $post_id,
            'user_id' => $user_id
        ]);
        $savedpost->save();
        return redirect($myurl);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        SavedPost::where('post_id', $id)->delete();

        return redirect('savedposts');
    }
}
