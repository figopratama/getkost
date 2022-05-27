<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="img/fav.png">
	<!-- Author Meta -->
	<meta name="author" content="CodePixar">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title>GetKost - Rumah kost terjangkau</title>
	<!--
		CSS
		============================================= -->
	<link rel="stylesheet" href="home/css/linearicons.css">
	<link rel="stylesheet" href="home/css/font-awesome.min.css">
	<link rel="stylesheet" href="home/css/themify-icons.css">
	<link rel="stylesheet" href="home/css/bootstrap.css">
	<link rel="stylesheet" href="home/css/owl.carousel.css">
	<link rel="stylesheet" href="home/css/nice-select.css">
	<link rel="stylesheet" href="home/css/nouislider.min.css">
	<link rel="stylesheet" href="home/css/ion.rangeSlider.css" />
	<link rel="stylesheet" href="home/css/ion.rangeSlider.skinFlat.css" />
	<link rel="stylesheet" href="home/css/magnific-popup.css">
	<link rel="stylesheet" href="home/css/main.css">
</head>

<body>
    @include('home.header')

	<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
	</head>
	<body>
		<!-- start product Area -->
	<section class="owl-carousel active-product-area section_gap">
		<!-- single product slide -->
		<div class="single-product-slider">
			<div class="container">
				<div class="row justify-content-center" style="margin-top: 100px">
					<div class="col-lg-6 text-center">
						<div class="section-title">
							<h1>Latest Products</h1>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
								dolore
								magna aliqua.</p>
						</div>
					</div>
				</div>
				<div class="row">

				@foreach ($kamar as $kamar)

				<div class="col-lg-3 col-md-6">
						<div class="single-product">
							<img class="img-fluid" src="kamar/{{ $kamar->image }}" alt="">
							<div class="product-details">
								<div class="header-1" style="margin-top: 3px; font-size: small">
									<p>{{ $kamar->quantity }} kamar tersisa.</p>
									<h6>Rp{{ $kamar->price }}</h6>
								</div>
								<br>
								<div class="header-2" style="margin-top: 5px; font-size: medium">
									<h4>{{ $kamar->address }}</h4>

									<h5 style="color: darkorange">{{ $kamar->category }}</h5>
									{{-- <p>{{ $kamar->facility }}</p> --}}
								</div>
								<div class="prd-bottom">

									<a href="" class="social-info">
										<span class="ti-bag"></span>
										<p class="hover-text">add to bag</p>
									</a>
									<a href="" class="social-info">
										<span class="lnr lnr-heart"></span>
										<p class="hover-text">Wishlist</p>
									</a>
									<a href="" class="social-info">
										<span class="lnr lnr-move"></span>
										<p class="hover-text">view more</p>
									</a>
								</div>
							</div>
						</div>
					</div>
				@endforeach
				</div>
			</div>
		</div>
	</section>
	<!-- end product Area -->
	</body>
	</html>

	<script src="home/js/vendor/jquery-2.2.4.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
	 crossorigin="anonymous"></script>
	<script src="home/js/vendor/bootstrap.min.js"></script>
	<script src="home/js/jquery.ajaxchimp.min.js"></script>
	<script src="home/js/jquery.nice-select.min.js"></script>
	<script src="home/js/jquery.sticky.js"></script>
	<script src="home/js/nouislider.min.js"></script>
	<script src="home/js/countdown.js"></script>
	<script src="home/js/jquery.magnific-popup.min.js"></script>
	<!--gmaps Js-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
	<script src="home/js/gmaps.min.js"></script>
	<script src="home/js/main.js"></script>
</body>

</html>
