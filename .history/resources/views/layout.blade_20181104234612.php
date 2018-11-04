<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title','SAM LARAVEl')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  </head>
  <body>

    <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
        <ul class="navbar-nav">
                <li class="nav-item">
                        <a class="nav-link" href="/">HOME</a>
                      </li>    
          <li class="nav-item">
            <a class="nav-link" href="/contact">CONTACT US</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/about">ABOUT US</a>
          </li>
        </ul>
      </nav>
<br>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    @yield('content')
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  </body>
</html>