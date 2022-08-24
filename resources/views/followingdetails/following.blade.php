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
<h2>Following</h2>
@if($following->count() >0)
@foreach($following as $item2)
<div class="follwinglist" style="display:flex ;">
<img class="image rounded-circle" src="{{asset('/storage/images/'.$item2->user2->image)}}" alt="profile_image" style="width: 80px;height: 80px; padding: 10px; margin: 0px;border-radius: 50%; ">

<div class="followship-username float-left" style="display:flexbox; ;">
   <h3> {{$item2->user2->name}}</h3>
    <button class="float-right followed followingship-status">Following </button>

</div>
    </div>
    

@endforeach
@else
<div class="no_report_found">
   <h4> You are curently not following anyone </h4>
</div>
@endif
