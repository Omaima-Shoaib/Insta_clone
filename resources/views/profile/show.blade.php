<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    @extends('dashboard')
    @section('content')
    <div class="container" style="font-size:20px;">
        <div class="image">
            <!-- <img src="https://images.unsplash.com/photo-1522075469751-3a6694fb2f61?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=80"  width="155"  alt="Avatar" style="border-radius: 50%;"> -->
            @if(Auth::user()->image)
            <img class="image rounded-circle" src="{{asset('/storage/images/'.Auth::user()->image)}}" alt="" style="width: 80px;height: 80px; padding: 10px; margin: 0px;border-radius: 50%; ">
            @endif
        </div>
        <br>
        <div>
            <h2 class="mb-0 mt-0">Name : <span>{{Auth::user()->name}}</span></h2>
            <p><span class="profile-real-name">Gender : </span>{{$profile["gender"]}}</p>
            <p><span class="profile-real-name">Bio :{{$profile["bio"]}} </span></p>
            <p><span class="profile-real-name">Webiste :{{$profile["website"]}} </span></p>
        </div>
        <h2>Posts:</h2>
        <div class="row pt-5">
            @foreach($profile['user']['posts'] as $post)
            <div class="col-4 pb-4">
                <a href="{{route('posts.show' ,$post['id'])}}">
                    <img src="{{Storage::disk('public')->url('/images//'.$post->images[0]->url)}}" alt="{{$post->caption}}" width="100%" height="100%"></a>

                @if( $profile['user']->id == Auth::id() )


                @endif
            </div>
            @endforeach
        </div>
    </div>
    @endsection
</body>

</html>