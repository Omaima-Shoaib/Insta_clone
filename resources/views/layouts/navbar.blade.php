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

<nav class="navbar navbar-default" >
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#" style="color:black;">Instagram</a>
    </div>
    <ul class="nav navbar-nav">
  <li><a href="{{ route('users.index') }}" >My profile</a></li>
  <li><a href="{{ route('savedposts.index') }}" >Saved Posts</a></li>
  <li><a href="{{ route('posts.create') }}">New Post</a></li>
  <li><a href="{{ route('peopleoninstagram.peopleoninstagram') }}" >People on Instagram</a></li>


  <form method="POST" action="{{ route('logout') }}" style="float:right ; margin-left:700px; margin-top:14px;">
                            @csrf

                      <li>    <a href="route('logout')" style="text-decoration:none ;"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </a></li>
                        </form>

    </ul>
  </div>
</nav>
@section('content')
  @show

</body>
</html>
