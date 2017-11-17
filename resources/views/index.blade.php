@include('layouts.partials._header')

<body>
<!-- start header -->
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
				<li><a href="{{url('/contact')}}">Contact Us</a></li>
				@if (Route::has('login'))
				    @auth
                       <li><a href="{{ url('/home') }}">Home</a></li>
                    @else

                      <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                    Get In<span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li><a href="{{ route('login') }}">Login</a></li>
                                    <li><a href="{{ route('register') }}">Register</a></li>
                                </ul>
                        </li>

                    @endauth
               	 @endif   
				<div class="clear"></div>
			 </ul>
		</div>
		<div class="clear"></div>
	</div>
</div>
</div>
</div>

<div class="wrap">
<div class="wrapper">
	<div class="main">	
		<div class="content">
		    <h2 class="style list"><a href="#">How To Build a Laravel Application</a></h2>
			<h3 class="style">posted on march 28, 2013</h3>
			<div class="list_img">
				<img src="images/pic1.jpg" alt="" align=""/>	
			</div>		
			<p class="para"> What is a Laravel? The simple answer is that it is a php framework.There a are other php frameworks as well.</p>
			<a href="{{url('/blog')}}" class="btn">Read More</a>
		</div>
		
		<div class="content">
			<h2 class="style list"><a href="#"></a></h2>
			<h3 class="style">posted on December 2, 2013</h3>
			<div class="list_img">
				<img src="images/pic3.jpg" alt="" align=""/>	
			</div>		
			<p class="para"> </p>
			<a href="{{url('/blog')}}" class="btn">Read More</a>
			<div class="pagination">
				 <ul>
				    <li class="left_arrow" ><a href="#"></a></li>
				    <li><a href="#">1</a></li>
				    <li><a href="#">2</a></li>
				    <li><a href="#">3</a></li>
				    <li><a href="#">4</a></li>
				    <li><a href="#">5</a></li>
				    <li><a href="#">6</a></li>
				    <li class="right_arrow"><a href="#"></a></li>
				    <div class="clear"></div>
				  </ul>
			</div>
		</div>
	</div>
</div>
</div>
<!-- start footer -->
@include('layouts.partials._footer')
 <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>

@section('title','Blade')