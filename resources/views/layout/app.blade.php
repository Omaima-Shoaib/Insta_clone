

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>App Name - @yield('title')</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <style>
      .navigation-search-container .fa-search {
  position: absolute;
  top: 10px;
  left: 10px;
  font-size: 11px;
  color: rgba(0, 0, 0, 0.5);
}

@media only screen and (min-width: 320px) and (max-width: 650px) {
  /* Navigation */
  .navigation {
    padding: 0 20px;
    margin-bottom: 100px;
    justify-content: space-between;
  }
  .navigation-search-container {
    display: none;
  }
  .navigation-icons {
    display: flex;
  }
}

.navigation-icons {
  display: flex;
}

.navigation-search-container input:focus {
  outline: none;
}

.navigation-search-container input::placeholder {
  text-align: center;
}

    </style>
  </head>
  <body>

    @include('includes.navbar') 
    
    <div class="container">
      @yield('content')
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>