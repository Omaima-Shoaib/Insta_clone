<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
    img{
        width:400px;
        /* border-radius: 15px; */
   margin: auto
        /* margin:10px 10px 10px 10px; */
    }
    .post_info{
        margin-left: 20px;
        
        display: block
    }
    .mydiv{
   
        border-radius:20px;
        background-color:rgba(193, 191, 191, 0.116);
        width:50%;
        padding-top: 15px; 
        box-shadow: 10px 10px 10px rgba(193, 191, 191, 0.463);
        float: left;
        margin-left: 20px;
        margin-right: 20px;
    }
    .comments{
        
        float: left;
        width:45%;
        background-color: rgba(199, 199, 199, 0.181);
        border-radius: 15px;
        padding: 10px;
        box-shadow: 10px 10px 10px rgba(193, 191, 191, 0.463);
        float: right;

    }   
    a{
        color: #fa4106;
        text-decoration: none
    }
    .btn{
        
        border:none;
        background-color:#f8f8f8;
        border-radius:5px;
        width:100px;
        color:#fa4106;
        margin: 10px;
        height: 25px;
    }
    .btn2{
        background-color: #f8f8f8;
        border:none;border-radius:5px;
        width:100px;
        color: #fa4106;
        margin: 10px;
        height: 25px;
    }
    .btn-container{
        text-align: center;
        margin-bottom:25px;
    }
    .comments p{

        text-align: center;
        font-size: 25px;
        margin-top: 0px;
       
    }
    .comment-container{
        background-color: white;
        width: fit-content;
        max-width: 300px;
        padding-left: 20px;
        padding-right: 20px;
        padding-top: 10px;
        padding-bottom: 10px;
        border-radius: 15px;
        margin: 10px 5px 5px 5px;
    }
    .btn-comment{
        border:none;
        background-color:white;
        border-radius:5px;
        width:100px;
        float:right;
        color:#fa4106;
        margin: 10px;
        height: 25px;
    }
    .time{
        font-size: 12px;
        color: rgb(130, 130, 130);
    
    }
    .avatar{
        width: 25px;
        height: 25px;
        background-color: rgba(0, 0, 0, 0.345);
        border-radius: 100%;
        display: inline-flex;
        float: left;
        margin: 5px 5px 5px 5px;

    }
    .caption{
        margin-left: 10px;

    }
    .likes{
      text-align: center
    }
    .user-name{
color: #fa4106;
font-size: 13px;
display: block;

    }
    </style>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,0,0" />
</head>
<body >
    @extends('dashboard')
    @section('content')
        

    <div class="mydiv" >
    

@foreach($posts as $post)
<div class="post_info">
    <img class="avatar" src="{{asset('/storage/images/'.Auth::user()->image)}}" alt="." >

    <span class="user-name">
  <b>  {{  $post->user->name }} </b>
    </span>
    
   <span class="time">
    {{  $post['created_at'] }} 
</span>
<br>
<span></span>
<span class="caption">
{{  $post['caption'] }} </span>
<br>
{{-- {{ $post['id'] }} --}}

</div>
<br>
<div>
@foreach($images as $image)

<img src='{{ Storage::disk('images')->url($image->image) }}' ><br>
<div class="likes">
</div>
@endforeach
</div>
<form action="{{ route('likes.store') }}" method="post" class="likes">
    @csrf
    <input type="text" name="post_id" hidden value="{{ $post['id'] }}" id="">
    {{$likes}}
   likes <br>

<button id="dislike"><span class="material-symbols-rounded">
        thumb_down
        </span>
        <span class="material-symbols-rounded">
    thumb_up
    </span></button>
</form>

@endforeach
<div class="btn-container">
       
        {{-- <a href="" >Save Post</a> --}}
        @if(!request()->has('viewpost'))
    <form action="{{ route('savedposts.update',['post_id'=>$post['id']]) }}" method="POST">

        <button class="btn">Save Post</button>
    </form>
        @else 
        
        {{-- <button class="btn">Remove Post</button> --}}
        <form action="{{ route('savedposts.destroy',['id'=>$post['id']]) }}" method="Post">
            @csrf
            @method('Delete')
        <button type='submit' class="btn2">
         Remove </button>
        </form>
        @endif
       
  
        </div>
</div>

<div >
{{ $comments->links() }}
</div>

@foreach($posts as $post)
<div class="comments">
    <form  action="{{ route('comments.store') }}" method="post" enctype="multipart/form-data" >.
    <p> <b> comments</b></p>
<input type="text" name="post_id" hidden value="{{ $post['id'] }}" id="">
<textarea name="text" id="" cols="55" rows="3"></textarea>
<br>

<button class="btn-comment">Add</button>
<br>
@foreach($comments as $comment)
<div class="comment-container">

    {{-- <img class="avatar" 
     src="https://gravatar.com/avatar/c919a0eca113d75bd4c37d36167d49c0/?s=240" > --}}
     @if(Auth::user()->image)
     <img class="avatar" src="{{asset('/storage/avatars/'.Auth::user()->image)}}" alt="." >
 @endif
     {{-- this should be user avatar  --}}
<b> {{$comment['author']}}</b>
<br>
 <span class="time"> {{ $comment['created_at'] }} </span>
<br>
{{$comment['text']}} <br>
</div>

@endforeach
</form>
</div>
<br>
<div style="display: block">
</div>
@endforeach

@endsection

</body>
</html>

