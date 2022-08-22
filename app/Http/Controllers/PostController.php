<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Post;
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
        return view('posts.create');
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
        'user_id'=>$userid
    ]);
    $post->save();
        if($request->hasFile('images')){
                $files=$request->file('images');
               //dd($userid);
                foreach($files as $file){
         $data['image']=   $file ->store('posts','images');
    //    $data['image']= $request->file('image')->store('posts','images');
         
      $user->posts()->create(['caption'=>$request['caption']]);
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
        $posts=Post::where('id',$request['id'])->get();
        $images=Image::where('post_id',$request['id'])->get();
        return view('posts.show',['id'=>$request['id'],'posts'=>$posts,'post'=>$post,'images'=>$images]);
    
        // dd($images);
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
