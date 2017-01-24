<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <title>@yield('title') - Calander</title>
    <meta name="description" content="Basic Authentication with Sentry and Laravel">
    <meta name="author" content="Andre Madarang">

    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

    <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Favicon and Apple Icons -->
    <link rel="shortcut icon" href="img/favicon.ico">

    <!-- style class -->
    <link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<body>

    <header>

        <nav class="navbar navbar-default" role="navigation">
          <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="{{ url('/') }}">Calander</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav">
              </ul>

              <ul class="nav navbar-nav navbar-right">
                @if (!Sentry::check())
                  
                    <li class="{{ set_active('login') }}"><a href="{{ url('login') }}">Login</a></li>
                @else
                  
                    <li><a href="{{ url('logout') }}">Logout</a></li>
                @endif
              </ul>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>

    </header>

    <div class="container">
        @yield('content')
    </div>


<!-- JavaScript -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

</body>
</html>