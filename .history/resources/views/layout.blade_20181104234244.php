<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title','SAM LARAVEl')</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
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


    @yield('content')
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>