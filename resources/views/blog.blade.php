@extends('layouts.app')
<!-- start main -->
@section('content')
<div class="wrap">
<div class="wrapper">
	<div class="main">	
		<div class="content">
			<h2 class="style list"><a href="#">Year in review: Our favourites Apps from 2012</a></h2>
			<h3 class="style">posted on march 3, 2013</h3>
			<div class="list_img">
				<img src="images/pic2.jpg" alt="" align=""/>	
			</div>		
			<p class="para"> re going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
			<p class="para top">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's,</p>
			<p class="para top1">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dumleap into electronic typesetting,</p>
			<div class="list_img">
				<img src="images/pic1.jpg" alt="" align=""/>	
			</div>	
			<h4 class="style1 list"><a href="#">Features of wunderlist</a></h4>
			<p class="para top"> Aoks reasonable.</p>
			<p class="para top">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's,</p>
			<div class="list_img">
				<img src="images/pic9.jpg" alt="" align=""/>	
			</div>
			<p class="para top"> All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first truonary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable.</p>
			<div class="article top1">
				<h5>Share this article</h5>
				<ul>
					<li class="twitter"><a href="">1250</a></li>
					<li class="facebook"><a href="">100</a></li>
					<li class="pinterest"><a href="">328</a></li>
				</ul>
			</div>
			<div class="clear"></div>
		</div>
	<div class="content">
		<div class="grids_of_2">
			<h2>Comments</h2>
			<div class="grid1_of_2">
				<div class="grid_img">
					<a href=""><img src="images/pic10.jpg" alt=""/></a>
				</div>
				<div class="grid_text">
					<h4 class="style1 list"><a href="#">Uku Mason</a></h4>
					<h3 class="style">march 2, 2013 - 12.50 AM</h3>
					<p class="para top"> All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable.</p>
					<a href="" class="btn1">Click to Reply</a>
				</div>
				<div class="clear"></div>
			</div>
			<div class="grid1_of_2 left">
				<div class="grid_img">
					<a href=""><img src="images/pic11.jpg" alt=""/></a>
				</div>
				<div class="grid_text">
					<h4 class="style1 list"><a href="#">Designer First</a></h4>
					<h3 class="style">march 3, 2013 - 4.00 PM</h3>
					<p class="para top"> All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable.</p>
					<a href="" class="btn1">Click to Reply</a>
				</div>
				<div class="clear"></div>
			</div>
			<div class="grid1_of_2">
				<div class="grid_img">
					<a href=""><img src="images/pic12.jpg" alt=""/></a>
				</div>
				<div class="grid_text">
					<h4 class="style1 list"><a href="#">Ro Kanth</a></h4>
					<h3 class="style">march 2, 2013 - 12.50 AM</h3>
					<p class="para top"> All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable.</p>
					<a href="" class="btn1">Click to Reply</a>
				</div>
				<div class="clear"></div>
			</div>								
				<div class="artical-commentbox">
				 	<h2>Leave a Comment</h2>
		  			<div class="table-form">
						<form>
							<input type="text" class="textbox" value="Name:" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}">
							<input type="text" class="textbox" value="Email:" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}">
							<textarea value="Message:" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message';}">Message:</textarea>	
						</form>
							<a href="#">Submit</a>
					</div>
					<div class="clear"></div>
		  		</div>			
			</div>
	</div>
	<div class="clear"></div>
	</div>
</div>
</div>





@endsection

<!-- start footer -->



@section('javascript')

	<script src="{{ asset('js/app.js') }}"></script>

@endsection

