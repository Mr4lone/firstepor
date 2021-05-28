<!DOCTYPE html>
<html lang="zxx">

<head>
		<!-- Meta -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1"> 
		
		<title>MOCTC-</title>
		{{-- <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet"> --}}
		{{-- <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600,700,700i,800,800i" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,600,600i,700,800" rel="stylesheet"> --}}
		<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet"/>
		<link href="{{asset('fonts/font-awesome.min.css')}}" rel="stylesheet"/>
		<link href="{{asset('fonts/themify-icons.css')}}" rel="stylesheet"/>
		<link rel="icon" href="{{asset('images/favicon.jpg')}}"/>
<link href="{{asset('css/owl.carousel.min.css')}}" rel="stylesheet"/>
		<link href="{{asset('css/owl.theme.default.min.css')}}" rel="stylesheet"/>
		<link href="{{asset('css/lightbox.min.css')}}" rel="stylesheet"/>
		<link href="{{asset('css/owl.theme.default.min.css')}}" rel="stylesheet"/>
<link href="{{asset('css/animate.min.css')}}" rel="stylesheet"/>
		<link href="{{asset('css/normalize.css')}}" rel="stylesheet"/>
		<link href="{{asset('css/style.css')}}" rel="stylesheet"/>
		<link href="{{asset('css/responsive.css')}}" rel="stylesheet"/>
		
	</head>
	
	 <body data-spy="scroll" data-offset="50">
		<!-- START PRELOADER -->
			<div class="preloader">
				<div class="spinner">
					<div class="double-bounce1"></div>
					<div class="double-bounce2"></div>
				</div>
			</div>
		<!-- END PRELOADER -->
		
		<!-- START NAVBAR -->
			<div class="main_header navbar navbar-default menu-top">
				<div class="container">
					<div class="row">
						<div class="col-md-2 col-sm-2 col-xs-4">
							<a href="#" class="logo">
								<h2>MOCTC</h2>
							</a>
						</div>
						
						<div class="col-md-10 col-sm-10 col-xs-8">
							<div class="navbar-header">
								<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
									<span class="fa fa-navicon"></span>
								</button>
							</div>
							
							<nav id="navbar" class="navbar-collapse collapse">
								<ul class="nav navbar-nav navbar-right">
									<li><a href="#home">မူလစာမျက်နှာ</a></li>
									<li><a href="#about_us">ကျွနုပ်တို့အကြောင်း</a></li>
									<li><a href="#service">ဝန်ဆောင်မှုများ</a></li>
									<li><a href="#portfolio">ပရောဂျက်များ</a></li>
									{{-- <li><a href="#team">Team</a></li>	 --}}
									{{-- <li><a href="#pricing_table">Pricing</a></li> --}}
									<li><a href="{{ route('posts.index') }}">Blog</a></li>
									{{-- <li><a href="{{ route('student.')}}">Blog</a></li>														 --}}
									<li><a href="#contact">Contact</a></li>
								</ul>
							</nav> 
						</div>
					</div>
				</div>
				<!--- END CONTAINER -->
			</div> 
		<!-- END NAVBAR -->	



		@yield('content')
		

		<!-- START CONTACT -->
<section id="contact">
	<div class="contact_map_area">
	   <!-- map js -->
   {{--	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387190.2799147156!2d-74.25987542268453!3d40.69767006361789!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sbd!4v1537615143351" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
	   <!-- END MAP -->--}}
   </div> 
   <div class="container">
	   <div class="contact_area">
		   <div class="row">							
			   <div class="col-md-7 col-sm-7 col-xs-12">
				   <div class="single_contact">
					   <form id="contact-form" method="post" action="http://belaltheme.com/tm/Fozila/fozila/contact.php" enctype="multipart/form-data">
						   <div class="row">
							   <div class="form-group col-md-6">
								   <div class="contact_form">
									   <input type="text" name="name" class="form-control" id="first-name" placeholder="Full Name *" required="required">
								   </div>
							   </div>
							   
							   <div class="form-group col-md-6">
								   <div class="contact_form">
									   <input type="text" name="name" class="form-control" id="subject" placeholder="Subject *" required="required">
								   </div>
							   </div>
							   
							   <div class="form-group col-md-12">
								   <div class="contact_form">
									   <input type="email" name="email" class="form-control" id="email" placeholder="Email *" required="required">
								   </div>
							   </div>
							   
							   <div class="form-group col-md-12">
								   <div class="contact_form">
									   <textarea rows="6" name="message" class="form-control" id="description" placeholder="Your Message *" required="required"></textarea>
								   </div>
							   </div>
							   
							   <div class="contact_form_btn text-center">
								   <button type="submit" value="Send message" name="submit" id="submitButton" class="btn btn-default main_btn ct_btn" title="Submit Your Message!">Send Message</button>
							   </div>
						   </div>
					   </form>
				   </div>
			   </div> <!-- END COL -->
			   <div class="col-md-5 col-sm-5 col-xs-12">
				   <div class="single_contact">
					   <h3>Head <span>Office</span></h3>
					   <ul class="sing_contact_iteam">
						   <li><i class="fa fa-home"></i> Naypyitaw</li>
						   <li><i class="fa fa-phone"></i> 09-259-972-014</li>			
						   <li><i class="fa fa-link"></i> www.moctc.com</li>
						   <li><i class="fa fa-envelope"></i>moctcmm@gmail.com</li>
					   </ul>
				   </div>
			   </div> <!-- END COL -->
		   </div> <!-- END ROW -->
	   </div> <!-- END AREA -->
   </div> <!-- END CONTAINER -->
</section>
<!-- END CONTACT -->


<!-- START COPYRIGHT -->
<section class="copyright_area">
   <div class="copyright text-center">
	   <div class="copy_text">
		   <p>Copyright ©2021 MOCTC | All Rights Reserved</p>
	   </div>
   </div>
</section>
<!-- END COPYRIGHT -->
		<!-- Latest jQuery -->
			<script src="{{asset('js/jquery.js')}}"></script>
		<!-- Latest compiled and minified Bootstrap -->
			<script src="{{asset('js/bootstrap.min.js')}}"></script>
		<!-- Latest compiled and easing -->	
			<script src="{{asset('js/jquery.easing.1.3.min.js')}}"></script>		
		<!-- Latest Modernizr -->	
			<script src="{{asset('js/modernizr-2.8.3.min.js')}}"></script>
		<!-- Latest Modernizr -->	
			<script src="{{asset('js/jquery.stellar.min.js')}}"></script>
		<!-- Isotope min js -->
			<script src="{{asset('js/isotope.pkgd.min.js')}}"></script>
		<!-- Owl-carousel min js  -->
			<script src="{{asset('js/owl.carousel.min.js')}}"></script>
		<!-- Lightbox min js  -->
			<script src="{{asset('js/lightbox.min.js')}}"></script>
		<!-- Jquery inview js -->
			<script src="js/jquery.inview.min.js"></script>
		<!-- scrolltopcontrol js -->
			<script src="{{asset('js/scrolltopcontrol.js')}}"></script>
		<!-- Particles js -->
			<script src="{{asset('js/particles.min.js')}}"></script>
			<script src="{{asset('js/app.js')}}"></script>		
		<!-- WOW - Reveal Animations When You Scroll -->
			<script src="{{asset('js/wow.min.js')}}"></script>
		<!-- Main js -->
			<script src="{{asset('js/main.js')}}"></script>
	
    </body>

</html>