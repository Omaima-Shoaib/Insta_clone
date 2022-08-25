<nav style="display:flex-box;float:right;">
<a href="{{ route('peopleoninstagram.peopleoninstagram') }}" >People on Instagram</a>
<a href="{{ route('users.index') }}" >My profile</a>
<form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <a href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </a>
                        </form>

</nav>
<div id="followers_show_action">
<h2>Followers </h2>
@if($followers->count() >0)
@foreach($followers as $item)
<div class="followeraslist" style="display:flex ;">
<img class="image rounded-circle" src="{{asset('/storage/images/'.$item->user1->image)}}" alt="profile_image" style="width: 80px;height: 80px; padding: 10px; margin: 0px;border-radius: 50%; ">

    <div class="followship-username float-left" style="display:flexbox ;">
      <a href="#" style="text-decoration: none ;"> <h3> {{$item->user1->name}}</h3></a>

       @if(isFollowing($item->id)=='following')
       <a href="#">Remove</a>
    <button class="float-right followed followingship-status" >Following </button>
    
    @else
    <a href="#">Remove</a>
    <button class="float-right followed followingship-status"  >Follow </button>
     @endif

    </div>
</div>
@endforeach
@else
<div class="no_report_found">
   <h4> You curently don't have any followers</h4>
  
</div>
@endif
</div>
