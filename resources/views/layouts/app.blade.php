<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>BRATAPP</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <!-- JQuery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.13.0/umd/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.0/js/mdb.min.js"></script>   
    <!-- <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.css')}}">
    <script type="text/javascript" src="{{asset('/js/jquery.js')}}"></script>-->
    <!-- <script type="text/javascript" src="{{asset('/js/bootstrap.min.js')}}"></script> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
             @if (Auth::guest() || (Auth::user()->admin)=='YES')
                     <a class="navbar-brand" href="#">Brand The Talent</a>       
            @else
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                       <a href="#" class="navbar-brand"  data-toggle="dropdown" role="button" aria-expanded="false">
                        Brand The Talent  <span class="caret"></span>
                       </a>
                      <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{url('/profiling')}}">
                                            Personality Profiling
                                        </a>
                                
                                        <a href="{{url('/subject')}}">
                                            Subjects
                                        </a>
                                    
                                        <a href="{{url('/softskills')}}">
                                            Soft Skills
                                        </a>
                                    
                                        <a href="{{url('/selfdev')}}">
                                            Self Development Plan
                                        </a>
                                    
                                        <a href="{{url('/aptitude')}}">
                                            Aptitude Test
                                        </a>
                                   
                                        <a href="/jobs">
                                            Jobs
                                        </a>
                                    
                                        <a href="resume">
                                            Resume
                                        </a>
                                    </li>
                      </ul>
                      </li>
                   </ul>
                @endif
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                   
                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            @if ((Auth::user()->admin)=='NO')
                            <li>
                                <a href="/home">
                                    Home
                                </a>
                            </li>
                            <li>
                                <a href="/feedback">
                                    Feedback
                                </a>
                            </li>
                            @endif
                            <li class="dropdown">
                                @if ((Auth::user()->admin)=='YES')
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    Prof. {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>
                                @else
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                        {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>
                                @endif

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script type="application/javascript">
       $("#un").click(function () {
            $("#uldis").show();
            $("#scdis").hide();
            $("#codis").hide();
            $("#ardis").hide(); 
            $(this).css('background-color','green');
            $(this).css('color','white');
            $(sc).css('background-color','white');
            $(sc).css('color','#636b6f');
            $(co).css('background-color','white');
            $(co).css('color','#636b6f');           
            $(ar).css('background-color','white');
            $(ar).css('color','#636b6f');
        });

        $("#sc").click(function () {
            $("#uldis").hide();
            $("#scdis").show();
            $("#codis").hide();
            $("#ardis").hide();
            $(this).css('background-color','green');
            $(this).css('color','white');
            $(un).css('background-color','white');
            $(un).css('color','#636b6f');
            $(co).css('background-color','white');
            $(co).css('color','#636b6f');           
            $(ar).css('background-color','white');
            $(ar).css('color','#636b6f');           
        });

        $("#co").click(function () {
            $("#uldis").hide();
            $("#scdis").hide();
            $("#codis").show();
            $("#ardis").hide();
            $(this).css('background-color','green');
            $(this).css('color','white');
            $(sc).css('background-color','white');
            $(sc).css('color','#636b6f');
            $(un).css('background-unlor','white');
            $(un).css('color','#636b6f');           
            $(ar).css('background-color','white');
            $(ar).css('color','#636b6f');           
        });

        $("#ar").click(function () {
            $("#uldis").hide();
            $("#scdis").hide();
            $("#codis").hide();
            $("#ardis").show();
            $(this).css('background-color','green');
            $(this).css('color','white');
            $(sc).css('background-color','white');
            $(sc).css('color','#636b6f');
            $(co).css('background-color','white');
            $(co).css('color','#636b6f');           
            $(un).css('background-color','white');
            $(un).css('color','#636b6f');           
        });

          
    </script>
</body>
</html>
