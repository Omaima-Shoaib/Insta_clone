<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Image;
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
      $user=Auth::user();
    $userid=Auth::id();
      $posts = Post::paginate(15);
      $post=new Post([
        'caption'=>$request->caption,
        'user_id'=>$userid,
    ]);
     $post->save();
    //$user->posts()->create(['caption'=>$request['caption']]);

        if($request->hasFile('images')){
                $files=$request->file('images');
               //dd($userid);
                foreach($files as $file){
         $data['image']=   $file ->store('posts','images');
    //    $data['image']= $request->file('image')->store('posts','images');
         
            $request['post_id']=$post->id;
      Image::create(['image'=>$data['image'],'post_id'=>$request['post_id']]);
                }
            }
        return redirect('posts');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post,Image $image,Request $request)
    {
       $user= Auth::user();
        // dd(Auth::User());
        $posts=Post::where('id',$request['id'])->get();
        $countposts=Post::where('id',$request['id'])->count();
        if($countposts>0){
        $images=Image::where('post_id',$request['id'])->get();
        // $comments=Comment::paginate(4);
        $comments=Comment::where('post_id',$request['id'])->paginate(4);
        
        return view('posts.show',['id'=>$request['id'],'posts'=>$posts,'post'=>$post,'images'=>$images
        ,'comments'=>$comments]
   );
        // dd($images);
    }
    else return "empty post";

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
