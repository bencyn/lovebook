<!-- main site -->
<html>

<!-- Mirrored from localhost/learn/index.php/love by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 12 Oct 2016 11:56:45 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <title>love book</title>

    <!-- <title>{{ config('app.name', 'Laravel') }}</title> -->

     <!-- Styles -->
    <link href="{{asset('css/app.css')}}" rel="stylesheet">

    <link href="{{asset('css/main.css')}}" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
            
</head>
<body>
<div id="header">
   

    <div id="menu-wrapper">
        <nav class="navbar navbar-default navbar-static-top">
            <div id="menu">
                <div class="container-fluid">
                    <div class="navbar-header">
                        
                        <!-- end of menu -->

                        <!-- Collapsed Hamburger -->
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                            <span class="sr-only">Toggle Navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                        <!-- Branding Image -->
                        <a class="navbar-brand" href="{{ url('/') }}">
                             <div id="logo" class="top1 ">
                              <h3> LoveBook</h3>
                            </div>
                            <!-- Love <img src="{{asset('images/brand_img2.jpg')}}" alt="Love" style="border-radius:3px; float:left; "> -->

                        </a>
                    </div>

                    <div class="collapse navbar-collapse" id="app-navbar-collapse">
                        <!-- Left Side Of Navbar -->
                        <ul class="nav navbar-nav">
                            &nbsp;
                            <!-- <li><a href="{{url('')}}">My Love</a></li> -->
                            <li><a href="{{url('')}}">love future</a></li>
                            
                            <li><a href="{{url('')}}">Love songs</a></li>
                            <li><a href="" >Valentines Gift</a></li>
                            <li><a href="#">Love Story</a></li>
                            <li><a href="{{url('')}}">Photos</a></li>
                        </ul>

                        <!-- Right Side Of Navbar -->
                        <ul class="nav navbar-nav navbar-right">
                            <!-- Authentication Links -->
                            @if (Auth::guest())
                                <li><a href="{{ url('/login') }}">Login</a></li>
                                <li><a href="{{ url('/register') }}">Register</a></li>
                            @else
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                        {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>

                                    <ul class="dropdown-menu" role="menu">
                                        <li>
                                            <a href="{{ url('/logout') }}"
                                                onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                                Logout
                                            </a>

                                            <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                                {{ csrf_field() }}
                                            </form>
                                        </li>
                                    </ul>
                                </li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
    </div> 
                <!-- end menu div -->
    </div>
        </nav>

    </div>
<!-- </div> -->

            @yield('content')
        

    <!-- footer section -->
    <div id="footer">
        <p class="copyright">&copy;&nbsp;&nbsp;2014 Happy valentine &nbsp;&bull;&nbsp; Design by <Strong> Benson Njungé</strong>.</p>
        <p class="link"><a href="#"></a>&nbsp;&#8226;&nbsp;<a href="#">To my lovely joan</a></p>
    </div>
     <!-- Scripts -->
    <script src="asset('js/app.js')"></script>
</body>
</html>

   
