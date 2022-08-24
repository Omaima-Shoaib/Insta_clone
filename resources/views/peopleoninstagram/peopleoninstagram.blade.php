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
<h2>Hi {{Auth::user()->name}}, Find people on instagram </h2>





@foreach($user as $item3)
<div class="follwinglist" style="display:flex ;">
<img class="image rounded-circle" src="{{asset('/storage/images/'.$item3->image)}}" alt="profile_image" style="width: 80px;height: 80px; padding: 10px; margin: 0px;border-radius: 50%; ">

<div class="followship-username float-left" style="display:flexbox; ;">
   <a href="#" style="text-decoration: none ;"><h3> {{$item3->name}}</h3></a>

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
    

@endforeach


