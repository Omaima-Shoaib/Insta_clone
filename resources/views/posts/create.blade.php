<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .caption{
            margin:0px;
            font-size: 25px;
        }
        #caption{
            width: 250px;
            height: 30px;
            margin-top: 10px;
            margin-bottom: 10px;
            border:1px solid rgba(91, 91, 91, 0.475);
            border-radius: 5px;
                }
        .container{
                height: 250px;
                  border:1px solid rgba(91, 91, 91, 0.475);
                  border-radius:5px
        }
        .btn{
            margin-top: 10px;
            width: 100px;
            border-radius: 5px; 
            border: none;
            height: 25px;
            color:#fa4106;
            

        }
    </style>
</head>
<body >
    @extends('dashboard')
    @section('content')
  <div style="width:fit-content;margin: auto" > 
     <div style="margin:auto">
        <form  action="{{ route('posts.store') }}" method="post" enctype="multipart/form-data" >
        @csrf
      {{-- @if($errors->any()) --}}
        <div class="caption">
            caption <br>
            <input type="text" name='caption' id="caption">
            </div>
                <div style="text-align: center" >

                <div class="container" >
                    <p style="text-align:center;font-size:65px;color:rgba(91, 91, 91, 0.475)"><b>+</b></p>
                  {{-- @error('image') --}}

                    <input type="file" name="images[]" id="" multiple style="margin-left: 20px" required>
                    
                  {{-- @enderror --}}
                </div>

        
                <button type="submit"  class="btn">Add</button>
                </div>
                {{-- @endif --}}
        </form>
        </div> 
    </div> 
    @endsection 
</body>
</html>