<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePostRequest;
use App\Models\Comment;
use App\Models\Image;
use App\Models\Like;
use App\Models\Post;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('posts.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validation can be done by creating  new request class 'CreatePostRequest'

        //    $validatedData = $request->validate([
        // 'image[]' => 'required']);
        // $request -> all();


        $myurl = url()->previous();
        $user = Auth::user();
        $userid = Auth::id();
        $posts = Post::paginate(15);
        $post = new Post([
            'caption' => $request->caption,
            'user_id' => $userid,
        ]);
        $post->save();
        //$user->posts()->create(['caption'=>$request['caption']]);

        if ($request->hasFile('images')) {
            $files = $request->file('images');
            //dd($userid);
            foreach ($files as $file) {
                $data['image'] =   $file->store('posts', 'images');
                //    $data['image']= $request->file('image')->store('posts','images');

                $request['post_id'] = $post->id;
                Image::create(['image' => $data['image'], 'post_id' => $request['post_id']]);
            }
        }
        return redirect($myurl);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post, Image $image, Request $request)
    {
        try {
            $user = Auth::user();
            // dd(Auth::User());
            $posts = Post::where('id', $request['id'])->get();
            $post = Post::where('id', $request['id'])->first();
            $myuser = User::where('id', $post['user_id'])->first();
            $countposts = Post::where('id', $request['id'])->count();

            $images = Image::where('post_id', $request['id'])->get();
            // $comments=Comment::paginate(4);
            $comments = Comment::where('post_id', $request['id'])->paginate(4);
            $likes = Like::where('post_id', $request['id'])->count();
            return view(
                'posts.show',
                [
                    'id' => $request['id'], 'posts' => $posts, 'post' => $post, 'images' => $images, 'comments' => $comments, 'likes' => $likes, 'myuser' => $myuser
                ]
            );
            // dd($images);
        } catch (\Exception $e) {
            return view('savedposts.empty');
        }
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
    public function search(){
        $search = request('search');
        
        $users = User::where('username', 'like', "%{$search}%")->orWhere('name', 'like', "%{$search}%")->get();

        $posts = Post::whereHas('user', function ($query) use ($users) {

            $query->whereIn('id', $users->pluck('id'));

        })->get();

        return view('posts.search')->with(['posts' => $posts]);
    }
    public function update(Request $request, $id)
    {
        //
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
