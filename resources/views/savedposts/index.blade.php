<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        table{
            border-spacing: 30px;
        }
        .viewbutton{
            border:none;
            background-color:#fa4106;border-radius:5px;width:80px;
            height: 30px;
        }
        a{
            color: #fa4106;
            text-decoration:none;
         

        }
        td{
            width: 500px;
          background-color: rgba(199, 199, 199, 0.108);
        
          
          
        }
        caption{
            color: #fa4106;
            font-size: 25px;
        }
        #tdleft{
            border-top-left-radius: 15px;
            border-bottom-left-radius: 15px;

        }
        #tdright{
            border-top-right-radius: 15px;
            border-bottom-right-radius: 15px;
        }
        img{
            width:150px;
        }
       
    </style>
    <title>Document</title>
</head>
<body>
    @extends('dashboard')
    @section('content')
<table style="margin: auto;text-align:center">
    <caption>Saved Posts</caption>
<tr>
  <th></th>
  <th> </th>
  <th></th>
</tr>
    @foreach($posts as $post )

  <tr>
  <div class="btn">
    <td id="tdleft">  {{  $post['caption'] }} </td>
    {{-- <td>  <img src='{{ Storage::disk('images')->url($image->image) }}' ></td> --}}
    {{-- {{ $post['post_id'] }} --}}
    {{-- <td><p> {{ $savedpost['created_at'] }}</p></td> --}}
    <td id="tdright"><button type='submit'  class="viewbutton">
        <a href="{{ route('posts.show',['id'=>$post['post_id'],'viewpost'=>'viewpost']) }}"  style="color: #fa4106;text-decoration:solid">View Post</a></button></td>
    <td>   
         <form action="{{ route('savedposts.destroy',['id'=>$post['post_id']]) }}" method="Post">
            @csrf
            @method('Delete')
        <button type='submit' class="btn2">
         Remove </button>
        </form>
    </td>
        @endforeach  
 
    </div>
</table>
@endsection
</body>
</html>



