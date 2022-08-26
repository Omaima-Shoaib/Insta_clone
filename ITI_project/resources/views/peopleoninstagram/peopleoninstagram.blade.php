@extends('layouts.navbar')
@section('content')
<h2>Hi {{Auth::user()->name}}, Find people on instagram </h2>

@foreach($user as $item3)
<div class="follwinglist" style="display:flex ;">
<img class="image rounded-circle" src="{{asset('/avatars/'.$item3->image)}}" alt="profile_image" style="width: 90px;height: 90px; padding: 10px; margin: 0px;border-radius: 50%; ">




<div class="followship-username float-left" style="display:flexbox;margin-left:30px ;">
   <a href="#" style="text-decoration: none ; font-size:20px;"><h3> {{$item3->name}}</h3></a>

   @if(isFollowing($item3->id)=='following')
    <button class="float-right following followingship-status">Following </button>

    @elseif(isFollowing($item3->id)=='follower' && isFollowing($item3->id)!='following')
    <a href="#">Remove</a>
    <button class="float-right followed followingship-status">Follow  </button>

    @elseif(isFollowing($item3->id)=='follower'&& isFollowing($item3->id)=='following')
    <button class="float-right followed followingship-status"> Friends </button>

    @else
    <button class="float-right followed followingship-status">Follow </button>

     @endif


</div>
    </div>
    
    <hr>

@endforeach

@endsection




