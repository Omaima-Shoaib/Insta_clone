@extends('layouts.navbar')
@section('content')
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

<div class="container">
  <h2>Update Profile</h2>
  <form method="POST" action="{{ route('users.update') }}" enctype="multipart/form-data">
        @method('PUT')
            @csrf
    <div class="form-group">
      <label for="name">Name</label>
      <input type="text" class="form-control" id="name" name="name" value="{{Auth::user()->name}}" required>
    </div>

    <div class="form-group">
      <label for="username">Username</label>
      <input type="text" class="form-control" id="username" name="username" value="{{Auth::user()->username}}" required>
    </div>

    <div class="form-group">
      <label for="email">Email</label>
      <input type="email" class="form-control" id="email" name="email" value="{{Auth::user()->email}}" required>
    </div>

    <div class="form-group">
      <label for="phone">Phone</label>
      <input type="tel" class="form-control" id="phone" name="phone" value="{{Auth::user()->phone}}" required>
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
      <img class="image rounded-circle" src="{{Auth::user()->image}}" alt="profile_image" style="width: 80px;height: 80px; padding: 10px; margin: 0px;border-radius: 50%; ">

    </div>

    <div class="form-group">
      <label for="password">Password</label>
      <input type="password" class="form-control" id="password" name="password" value="{{Auth::user()->password}}"required>
    </div>
    
    <button type="submit" class="btn btn-primary">Update</button>
  </form>
</div>

</body>
</html>
@endsection

        
