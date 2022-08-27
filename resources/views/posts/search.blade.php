<head>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
 
</head>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h1>Search Result</h1>
                </div>
                @if(count($posts) == 0)
                    <h3 style="text-align:center;">No results found</h3>
                @endif
                
                <div class="card-body">
                    <div class="row">
                        @foreach ($posts as $post)

                            <div class="col-md-4">
                                <div class="card mb-4 shadow-sm">
                                <a  class="center" href="{{ route('posts.show', $post['id']) }}" >
                                    show more
                                    <img  src="{{Storage::disk('public')->url('/images//'.$post->images[0]->url)}}" alt="{{$post->caption}}" width="100%" height="100%">
                                </a>
                                    <div class="card-body">
                                        <h3 class="card-text">{{ $post->title }}</h3>
                                        <p class="card-text">{{ $post->caption }}</p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <small class="text-muted">{{ $post->created_at->diffForHumans() }}</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  

