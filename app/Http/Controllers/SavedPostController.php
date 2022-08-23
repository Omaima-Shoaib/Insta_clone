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
$userid=Auth::id();
        	
// $users = User::join('posts', 'users.id', '=', 'posts.user_id')
// ->get(['users.*', 'posts.caption'])->count();
 $savedposts= SavedPost::where('user_id',$userid)->get();
 $posts=Post::join('saved_posts','posts.id','=','saved_posts.post_id')->get();
// return view('savedposts.index',['posts'=>$savedposts]);
foreach($savedposts as $saved_post){
return view('savedposts.index',['posts'=>$posts,'saved_post'=>$saved_post]);
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
    public function store(Request $request,Post $post)
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
        //this function will store the user_id and post_id in the saved_posts table
        // dd($request['post_id']);
        // dd($request->user()->id);
        $user_id=$request->user()->id;
        $post_id=$request['post_id'];
        $savedpost=new SavedPost([
            'post_id'=>$post_id,
            'user_id'=>$user_id
        ]);
        $savedpost->save();
        return redirect('posts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
