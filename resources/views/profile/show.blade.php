<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>

    </style>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,0,0" />
</head>
<body >
    @extends('dashboard')
    @section('content')
        
    <div class="profile-bio">


<p><span class="profile-real-name">Gender : </span>{{$profile['gender']}}</p>
<p><span class="profile-real-name">Bio : </span>{{$profile['bio']}}</p>
<p><span class="profile-real-name">Webiste : </span>{{$profile['website']}}</p>

</div>

@endsection
</body>
</html>

