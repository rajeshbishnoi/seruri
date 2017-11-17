@extends('layouts.app')
<!-- start header -->


<!-- start main -->
@section('content')
<div class="wrap">
<div class="wrapper">
	<div class="main">	
		<div class="content">
		    <h2 class="style list"><a href="#">Who am I </a></h2>
			<p class="para top1">Nobody in this world can answer this question but I'll keep it to the humans mind and try to answer this. I am an engineering student.An tech enthusisat. </p>
			<p class="para top"></p>
			<p class="para top"></p>
		</div>
		<div class="content">
			<h2 class="style list"><a href="#">Meat our team!</a></h2>
			<div class="span3">
				<div class="span1_of_3">
					<a href=""><img src="images/pic4.jpg" alt=""/></a>
					<h4 class="style top1"><a href="">Kimberly Thompson</a></h4>
					<h5 class="style">Founder & CEO</h5>
					<p class="para">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC,</p>
				</div>	
				<div class="span1_of_3">
					<a href=""><img src="images/pic5.jpg" alt=""/></a>
					<h4 class="style top1"><a href="">Rico Masi</a></h4>
					<h5 class="style">Code Master</h5>
					<p class="para">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's,</p>
				</div>	
				<div class="span1_of_3">
					<a href=""><img src="images/pic6.jpg" alt=""/></a>
					<h4 class="style top1"><a href="">Uku Mason</a></h4>
					<h5 class="style">Market Expert</h5>
					<p class="para">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form,</p>
				</div>			
			</div>
			<div class="clear"></div>
			<div class="span2">
				<div class="span1_of_2">
					<a href=""><img src="images/pic7.jpg" alt=""/></a>
					<h4 class="style top1"><a href="">Blaze Robar</a></h4>
					<h5 class="style">Design Guru</h5>
					<p class="para">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC,</p>
				</div>	
				<div class="span1_of_2">
					<a href=""><img src="images/pic8.jpg" alt=""/></a>
					<h4 class="style top1"><a href="">Jami Adams</a></h4>
					<h5 class="style">Assistent</h5>
					<p class="para">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's,</p>
				</div>	
				<div class="clear"></div>
			</div>
			<div class="clear"></div>
		</div>
	</div>
</div>
</div>
@endsection
<!-- start footer -->



@section('javascript')

	<script src="{{ asset('js/app.js') }}"></script>

@endsection