
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
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

<div class="container">
  <h2>Update Profile</h2>
  <form method="POST" action="{{ route('users.update') }}" enctype="multipart/form-data">
        @method('PUT')
            @csrf
    <div class="form-group">
      <label for="name">Name</label>
      <input type="text" class="form-control" id="name" name="name" value="{{Auth::user()->name}}">
    </div>

    <div class="form-group">
      <label for="username">Username</label>
      <input type="text" class="form-control" id="username" name="username" value="{{Auth::user()->username}}">
    </div>

    <div class="form-group">
      <label for="email">Email</label>
      <input type="email" class="form-control" id="email" name="email" value="{{Auth::user()->email}}">
    </div>

    <div class="form-group">
      <label for="phone">Phone</label>
      <input type="tel" class="form-control" id="phone" name="phone" value="{{Auth::user()->phone}}">
    </div>

    <div class="form-group">
      <label for="bio">Bio</label>
      <input type="text" class="form-control" id="bio" name="bio" value="{{Auth::user()->bio}}">
    </div>

    <div class="form-group">
      <label for="website">Website</label>
      <input type="url" class="form-control" id="website" name="website" value="{{Auth::user()->website}}">
    </div>
    <div class="form-group">
      <label for="image">Update Profile Photo</label>
      <input type="file" class="form-control" id="image" name="image" value="{{Auth::user()->image}}">
      <img class="image rounded-circle" src="{{asset('/storage/images/'.Auth::user()->image)}}" alt="profile_image" style="width: 80px;height: 80px; padding: 10px; margin: 0px;border-radius: 50%; ">

    </div>

    <div class="form-group">
      <label for="password">Password</label>
      <input type="password" class="form-control" id="password" name="password" value="{{Auth::user()->password}}">
    </div>
    
    <button type="submit" class="btn btn-primary">Update</button>
  </form>
</div>

</body>
</html>

        
