<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="{{ asset ('homeassets/img/fav.png') }}">
	<!-- Author Meta -->
	<meta name="author" content="CodePixar">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title>Ecommerce Store</title>
	<!--
		CSS
		============================================= -->
	<link rel="stylesheet" href="{{ asset ('homeassets/css/linearicons.css ') }}">
	<link rel="stylesheet" href="{{ asset ('homeassets/css/font-awesome.min.css ') }}">
	<link rel="stylesheet" href="{{ asset ('homeassets/css/themify-icons.css ') }}">
	<link rel="stylesheet" href="{{ asset ('homeassets/css/bootstrap.css ') }}">
	<link rel="stylesheet" href="{{ asset ('homeassets/css/owl.carousel.css ') }}">
	<link rel="stylesheet" href="{{ asset ('homeassets/css/nice-select.css ') }}">
	<link rel="stylesheet" href="{{ asset ('homeassets/css/nouislider.min.css ') }}">
	<link rel="stylesheet" href="{{ asset ('homeassets/css/ion.rangeSlider.css ') }}" />
	<link rel="stylesheet" href="{{ asset ('homeassets/css/ion.rangeSlider.skinFlat.css ') }}" />
	<link rel="stylesheet" href="{{ asset ('homeassets/css/magnific-popup.css ') }}">
	<link rel="stylesheet" href="{{ asset ('homeassets/css/main.css ') }}">
	{{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.1.0/css/font-awesome.min.css"> --}}
	{{-- <link rel="stylesheet" href="{{ asset ('homeassets/path/to/font-awesome/css/font-awesome.min.css ') }}"> --}}
	{{-- <link rel="stylesheet" href="{{ asset ('homeassets/path/to/font-awesome-1.0.css ') }}"> --}}



</head>

<body>

	<!-- Start Header Area -->
	<header class="header_area sticky-header mt-3">
		<div class="main_menu">
			<nav class="navbar navbar-expand-lg navbar-light main_box">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<a class="navbar-brand logo_h" href="/"><img src="{{ asset ('homeassets/img/logo.png') }}" alt=""></a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
					 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						<ul class="nav navbar-nav menu_nav ml-auto">
							<li class="nav-item active"><a class="nav-link" href="/">Home</a></li>
							<li class="nav-item submenu dropdown">
								<a href="shop" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
								 aria-expanded="false">Shop</a>
								<ul class="dropdown-menu">
									<li class="nav-item"><a class="nav-link" href="shop">Shop Category</a></li>
									<li class="nav-item"><a class="nav-link" href="singleproduct">Product Details</a></li>
									<li class="nav-item"><a class="nav-link" href="cart">Shopping Cart</a></li>
									<li class="nav-item"><a class="nav-link" href="checkout">Product Checkout</a></li>
									<li class="nav-item"><a class="nav-link" href="confirmorder">Confirmation</a></li>
								</ul>
							</li>
							<li class="nav-item submenu dropdown">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
								 aria-expanded="false">Blog</a>
								<ul class="dropdown-menu">
									<li class="nav-item"><a class="nav-link" href="blog">Blog</a></li>
									<li class="nav-item"><a class="nav-link" href="blogdetail">Blog Details</a></li>
								</ul>
							</li>

							<li class="nav-item"><a class="nav-link" href="trackorder">Tracking</a></li>
							<li class="nav-item"><a class="nav-link" href="contact">Contact</a></li>

							<li class="nav-item submenu dropdown">
								<a href="shop" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
								 aria-expanded="false"> <img class="rounded-circle me-lg-2" src="{{ asset ('adminassets/img/user.jpg') }}" alt="" style="width: 30px; height: 30px;"></a>
								 {{-- <span class="d-none d-lg-inline-flex">{{Auth::User()->name}}</span> --}}
								<ul class="dropdown-menu">

									<form method="POST" action="/logout">
										@if(Auth::check())
										<li class="nav-item"><a class="nav-link"  href="/logout "><button href="/logout" class="dropdown-item" type="submit">Logout</button></a></li>
										@csrf
									</form>
						 @else
							<li class="nav-item"><a class="nav-link" href="/login">Login</a></li>
							<li class="nav-item"><a class="nav-link" href="/register">Register</a></li>
						 {{-- <li class="nav-item"><a class="nav-link" href="userlogin">Login</a></li> --}}
                             @endif


								</ul>
							</li>



						</ul>
						<ul class="nav navbar-nav navbar-right">
							<li class="nav-item"><a href="cart" class="cart"><span class="ti-bag"></span></a></li>
							<li class="nav-item">
								<button class="search"><span class="lnr lnr-magnifier" id="search"></span></button>
							</li>
						</ul>
					</div>
				</div>
			</nav>
		</div>
		<div class="search_input" id="search_input_box">
			<div class="container">
				<form class="d-flex justify-content-between">
					<input type="text" class="form-control" id="search_input" placeholder="Search Here">
					<button type="submit" class="btn"></button>
					<span class="lnr lnr-cross" id="close_search" title="Close Search"></span>
				</form>
			</div>
		</div>
	</header>
	<!-- End Header Area -->

	@yield('trackordercontent')
	@yield('contactcontent')
	@yield('logincontent')
	@yield('blogdetailcontent')
    @yield('blogcontent')
	@yield('confirmcontent')
	@yield('checkoutcontent')
	@yield('cartcontent')
	@yield('singleproduct')
	@yield('content')
	@yield('homecontent')







    <!-- Start related-product Area -->
	<section class="related-product-area section_gap_bottom">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-6 text-center">
					<div class="section-title">
						<h1>Deals of the Week</h1>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
							magna aliqua.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-9">
					<div class="row">
						<div class="col-lg-4 col-md-4 col-sm-6 mb-20">
							<div class="single-related-product d-flex">
								<a href="#"><img src="{{ asset ('homeassets/img/r1.jpg') }} ') }}" alt=""></a>
								<div class="desc">
									<a href="#" class="title">Black lace Heels</a>
									<div class="price">
										<h6>$189.00</h6>
										<h6 class="l-through">$210.00</h6>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6 mb-20">
							<div class="single-related-product d-flex">
								<a href="#"><img src="{{ asset ('homeassets/img/r2.jpg') }}" alt=""></a>
								<div class="desc">
									<a href="#" class="title">Black lace Heels</a>
									<div class="price">
										<h6>$189.00</h6>
										<h6 class="l-through">$210.00</h6>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6 mb-20">
							<div class="single-related-product d-flex">
								<a href="#"><img src="{{ asset ('homeassets/img/r3.jpg') }}" alt=""></a>
								<div class="desc">
									<a href="#" class="title">Black lace Heels</a>
									<div class="price">
										<h6>$189.00</h6>
										<h6 class="l-through">$210.00</h6>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6 mb-20">
							<div class="single-related-product d-flex">
								<a href="#"><img src="{{ asset ('homeassets/img/r5.jpg') }}" alt=""></a>
								<div class="desc">
									<a href="#" class="title">Black lace Heels</a>
									<div class="price">
										<h6>$189.00</h6>
										<h6 class="l-through">$210.00</h6>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6 mb-20">
							<div class="single-related-product d-flex">
								<a href="#"><img src="{{ asset ('homeassets/img/r6.jpg') }}" alt=""></a>
								<div class="desc">
									<a href="#" class="title">Black lace Heels</a>
									<div class="price">
										<h6>$189.00</h6>
										<h6 class="l-through">$210.00</h6>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6 mb-20">
							<div class="single-related-product d-flex">
								<a href="#"><img src="{{ asset ('homeassets/img/r7.jpg') }}" alt=""></a>
								<div class="desc">
									<a href="#" class="title">Black lace Heels</a>
									<div class="price">
										<h6>$189.00</h6>
										<h6 class="l-through">$210.00</h6>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6">
							<div class="single-related-product d-flex">
								<a href="#"><img src="{{ asset ('homeassets/img/r9.jpg') }}" alt=""></a>
								<div class="desc">
									<a href="#" class="title">Black lace Heels</a>
									<div class="price">
										<h6>$189.00</h6>
										<h6 class="l-through">$210.00</h6>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6">
							<div class="single-related-product d-flex">
								<a href="#"><img src="{{ asset ('homeassets/img/r10.jpg') }}" alt=""></a>
								<div class="desc">
									<a href="#" class="title">Black lace Heels</a>
									<div class="price">
										<h6>$189.00</h6>
										<h6 class="l-through">$210.00</h6>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6">
							<div class="single-related-product d-flex">
								<a href="#"><img src="{{ asset ('homeassets/img/r11.jpg') }}" alt=""></a>
								<div class="desc">
									<a href="#" class="title">Black lace Heels</a>
									<div class="price">
										<h6>$189.00</h6>
										<h6 class="l-through">$210.00</h6>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3">
					<div class="ctg-right">
						<a href="#" target="_blank">
							<img class="img-fluid d-block mx-auto" src="{{ asset ('homeassets/img/category/c5.jpg') }}" alt="">
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End related-product Area -->

	<!-- start footer Area -->
	<footer class="footer-area section_gap">
		<div class="container">
			<div class="row">
				<div class="col-lg-3  col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<h6>About Us</h6>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore dolore
							magna aliqua.
						</p>
					</div>
				</div>
				<div class="col-lg-4  col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<h6>Newsletter</h6>
						<p>Stay update with our latest</p>
						<div class="" id="mc_embed_signup">

							<form target="_blank" novalidate="true" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
							 method="get" class="form-inline">

								<div class="d-flex flex-row">

									<input class="form-control" name="EMAIL" placeholder="Enter Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email '"
									 required="" type="email">


									<button class="click-btn btn btn-default"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>
									<div style="position: absolute; left: -5000px;">
										<input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
									</div>

									<!-- <div class="col-lg-4 col-md-4">
												<button class="bb-btn btn"><span class="lnr lnr-arrow-right"></span></button>
											</div>  -->
								</div>
								<div class="info"></div>
							</form>
						</div>
					</div>
				</div>
				<div class="col-lg-3  col-md-6 col-sm-6">
					<div class="single-footer-widget mail-chimp">
						<h6 class="mb-20">Instragram Feed</h6>
						<ul class="instafeed d-flex flex-wrap">
							<li><img src="{{ asset ('homeassets/img/i1.jpg') }}" alt=""></li>
							<li><img src="{{ asset ('homeassets/img/i2.jpg') }}" alt=""></li>
							<li><img src="{{ asset ('homeassets/img/i3.jpg') }}" alt=""></li>
							<li><img src="{{ asset ('homeassets/img/i4.jpg') }}" alt=""></li>
							<li><img src="{{ asset ('homeassets/img/i5.jpg') }}" alt=""></li>
							<li><img src="{{ asset ('homeassets/img/i6.jpg') }}" alt=""></li>
							<li><img src="{{ asset ('homeassets/img/i7.jpg') }}" alt=""></li>
							<li><img src="{{ asset ('homeassets/img/i8.jpg') }}" alt=""></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-2 col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<h6>Follow Us</h6>
						<p>Let us be social</p>
						<div class="footer-social d-flex align-items-center">
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-dribbble"></i></a>
							<a href="#"><i class="fa fa-behance"></i></a>
						</div>
					</div>
				</div>
			</div>
			<div class="footer-bottom d-flex justify-content-center align-items-center flex-wrap">
				<p class="footer-text m-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</p>
			</div>
		</div>
	</footer>
	<!-- End footer Area -->

	<script src="{{ asset ('homeassets/js/vendor/jquery-2.2.4.min.js ') }}"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.{{ asset ('homeassets/js/1.11.0/umd/popper.min.js ') }}" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
	 crossorigin="anonymous"></script>
	<script src="{{ asset ('homeassets/js/vendor/bootstrap.min.js ') }}"></script>
	<script src="{{ asset ('homeassets/js/jquery.ajaxchimp.min.js ') }}"></script>
	<script src="{{ asset ('homeassets/js/jquery.nice-select.min.js ') }}"></script>
	<script src="{{ asset ('homeassets/js/jquery.sticky.js ') }}"></script>
	<script src="{{ asset ('homeassets/js/nouislider.min.js ') }}"></script>
	<script src="{{ asset ('homeassets/js/countdown.js ') }}"></script>
	<script src="{{ asset ('homeassets/js/jquery.magnific-popup.min.js ') }}"></script>
	<script src="{{ asset ('homeassets/js/owl.carousel.min.js ') }}"></script>
	<!--gmaps Js-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
	<script src="{{ asset ('homeassets/js/gmaps.min.js ') }}"></script>
	<script src="{{ asset ('homeassets/js/main.js ') }}"></script>
</body>

</html>
