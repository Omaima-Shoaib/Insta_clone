<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        button{
            border:none;background-color:#fa4106;border-radius:5px;width:80px;
            height: 30px;
        }
        a{
            color: white;text-decoration:none
        }
        td{
            width: 200px;
          background-color: rgba(199, 199, 199, 0.252)
          
          
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
            border-radius: 15px;
            width:150px;
        }
       
    </style>
    <title>Document</title>
</head>
<body>
<table style="margin: auto;text-align:center">
    {{-- <caption>Saved Posts</caption> --}}
<tr>
  <th>Caption</th>
  <th> Saved at </th>
  <th></th>
</tr>
    @foreach($posts as $post )

  <tr>
    <td id="tdleft">  {{  $post['caption'] }} </td>
    {{-- <td>  <img src='{{ Storage::disk('images')->url($image->image) }}' ></td> --}}
    {{-- {{ $post['post_id'] }} --}}
    <td><p> {{ $saved_post['created_at'] }}</p></td>
    <td id="tdright"><button type='submit' >
        <a href="{{ route('posts.show',['id'=>$post['post_id']]) }}" >View Post</a></button></td>
    
    
    @endforeach  
</table>
</body>
</html>



