<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
    img{
        width: 250px;
        border-radius: 15px;
   
        margin:10px 10px 10px 10px;
    }
    .caption{
        margin-left: 20px;
    }
    .mydiv{
        margin: auto;
        border-radius:20px;
        background-color:rgba(193, 191, 191, 0.116);
        width:fit-content;
        
        padding-top: 15px; 
        box-shadow: 10px 10px 10px rgba(193, 191, 191, 0.463);
    
    }
    </style>
</head>
<body >
    <div class="mydiv" >
    

@foreach($posts as $post)
<div class="caption">
{{  $post['caption'] }}
</div>
<br>
@foreach($images as $image)

<img src='{{ Storage::disk('images')->url($image->image) }}' ><br>


@endforeach
@endforeach
</div>
</body>
</html>

