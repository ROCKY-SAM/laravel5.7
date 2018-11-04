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
        <a class="navbar-brand" href="#">HOME</a>
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="#">CONTACT US</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">ABOUT US</a>
          </li>
        </ul>
      </nav>


    @yield('content')
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>