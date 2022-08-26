@extends('layouts.navbar')
@section('content')

<h2>Following</h2>
@if($following->count() >0)
@foreach($following as $item2)
<div class="follwinglist" style="display:flex ;">
<img class="image rounded-circle" src="{{asset('/avatars/'.$item2->user2->image)}}" alt="profile_image" style="width: 80px;height: 80px; padding: 10px; margin: 0px;border-radius: 50%; ">

<div class="followship-username float-left" style="display:flexbox; margin-left:30px; ">
  <a href="#" style=" text-decoration: none ;font-size:20px;"> <h3> {{$item2->user2->name}}</h3> </a>
    <button class="float-right followed followingship-status">Following </button>

</div>
    </div>
    
<hr>

@endforeach
@else
<div class="no_report_found">
   <h4> You are curently not following anyone </h4>
</div>
@endif

@endsection
