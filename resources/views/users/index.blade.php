<div>
@if(session()->has('success'))
    <div style=" border: 10px solid #b5e7a0;
  padding: 15px;
  background: #b5e7a0;
  background-clip: border-box; 
  font-family: Arial, Helvetica, sans-serif; 
  font-size: medium ; ">
        {{ session()->get('success') }}
    </div>
@endif
</div>
@extends('layouts.navbar')
@section('content')


<div class="content ">
    <div class="img_btn_bio">
       
                <div class="image">
                    <!-- <img src="https://images.unsplash.com/photo-1522075469751-3a6694fb2f61?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=80"  width="155"  alt="Avatar" style="border-radius: 50%;"> -->
                    @if(Auth::user()->image)
                        
                    <img class="image rounded-circle" src="{{Auth::user()->image}}" alt="profile_image" style="width: 80px;height: 80px; padding: 10px; margin: 0px;border-radius: 50%; ">
                   
                        @endif
                </div>
                <!-- <form enctype="multipart/form-data" action="{{ route('users.index') }}">
                <label>update profile photo</label>
                <input type="file" name="image">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <input type="submit">
                </form> -->

                <div class="bio"> 
                        <p>{{Auth::user()->bio}}</p>
                </div> 
                <div class="website"> 
                        <p>{{Auth::user()->website}}</p>
                </div> 
           
                <div class="buttons">
                  <!-- <a href="#">  <button class="btn btn-sm btn-outline-primary w-100">Edit Profile</button></a> -->
                    <a href="{{route('users.edit')}}" ><button>Edit Profile</button></a> 
                   <a href="{{ route('posts.create') }}"> <button >Add post</button></a>
                </div>
             
    </div>

    <div class="info">
                    
                <h2 class="mb-0 mt-0">{{Auth::user()->name}}</h2>
                <div class="counting" >

                    <div class="posts">
                        <pre><span class="postsnb" style="font-family: Arial, Helvetica, sans-serif;">Posts  </span></pre>
                      <pre><span class="number1"> {{$posts->count()}}</span></pre>
                    </div>
                    

                    <div class="followers">
                     <a href="{{route('followersdetails.followers')}}" style="text-decoration:none ;"> <pre><span class="followersnb" style="font-family: Arial, Helvetica, sans-serif;">Followers  </span></pre></a>
                       <pre><span class="number2">  {{$followers->count()}}</span></pre>
  
                    </div>


                    <div class="following">
                    <a href="{{route('followingdetails.following')}}"  style="text-decoration:none ;"><pre><span class="followingnb"style="font-family: Arial, Helvetica, sans-serif;">Following  </span></pre> </a> 
                    <pre><span class="number3">  {{$following->count()}}</span></pre>    
                    </div>
                       
                </div>
    </div>            
</div>

                     
<style>
    body
    {
        background-color:white;
    }   
    .content
    {
    display: flex;  
    }
    .info
    {
    margin-left: 30px;
    display:flexbox;
    font-family: Arial, Helvetica, sans-serif;
    }
    .counting
    {
    display:flex ; 
    margin-right:15px;
    
    }
    .posts
    {
  font-size:20px;
  color: black;
    }
    .number1
    {
  font-weight:500;
    }
    .followers
    {
        font-size:20px;
        color: black;
    }
    .number2
    {
  font-weight:500;
    }
    .following
    {
        font-size:20px;
        color: black;
    }
    .number3
    {
        font-weight:500;
    }
</style>
@endsection
