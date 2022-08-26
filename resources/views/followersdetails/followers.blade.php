@extends('layouts.navbar')
@section('content')


<div id="followers_show_action">
<h2>Followers </h2>
@if($followers->count() >0)
@foreach($followers as $item)
<div class="followeraslist" style="display:flex ;">
<img class="image rounded-circle" src="{{asset('/avatars/'.$item->user1->image)}}" alt="profile_image" style="width: 90px;height: 90px; padding: 10px; margin: 0px;border-radius: 50%; ">

    <div class="followship-username float-left" style="display:flexbox ; margin-left:30px ;">
      <a href="#" style="text-decoration: none ;font-size:20px;"> <h3> {{$item->user1->name}}</h3></a>

       @if(isFollowing($item->id)=='following')
       <a href="#">Remove</a>
    <button class="float-right followed followingship-status" >Following </button>
    
    @else
    <a href="#">Remove</a>
    <button class="float-right followed followingship-status"  >Follow </button>
     @endif

    </div>
</div>

<hr>

@endforeach
@else
<div class="no_report_found">
   <h4> You curently don't have any followers</h4>
  
</div>
@endif
</div>

@endsection
