<body>
<div id="app">
    <div class="header_bg">
        <div class="wrap">
            <div class="wrapper">
                <div class="header">
                    <div class="logo">
                        <a href="{{url('/')}}"><img src="images/logo.png" alt=""/> </a>

                    </div>
                        <div class="cssmenu">
                            <ul>
                                <li ><a class="home" href="{{url('/')}}"></a></li>
                                <li class="active"><a href="{{url('/about')}}">About</a></li>
                                <li><a href="{{url('/blog')}}">Blog</a></li>
                                {{-- <li><a href="{{url('/inspiration')}}">Inspiration</a></li> --}}
                                <li><a href="{{url('/contact')}}">Contact Us</a></li>
                         
                                     @guest
                                        <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                                    Step In<span class="caret"></span>
                                                </a>

                                                <ul class="dropdown-menu">
                                                    <li><a href="{{ route('login') }}">Login</a></li>
                                                    <li><a href="{{ route('register') }}">Register</a></li>
                                                </ul>
                                        </li>
                        
                                        @else
                                            <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                                    {{ Auth::user()->name }} <span class="caret"></span>
                                                </a>

                                                <ul class="dropdown-menu">
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
                                        @endguest
                            </ul>
                        </div>
                    <div class="clear"></div>
                </div>
            </div>
        </div>
    </div>
            
</div>