<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
	<base href="/public">
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
			<section class="banner-area">
				<div class="container">
					<div class="row fullscreen align-items-center justify-content-start">
						<div class="col-lg-12" style="margin-left: 120px; margin-top: 80px; width: 70%; padding: 30px">
							<div class="active-banner-slider owl-carousel">
								<div class="row single-slide align-items-center d-flex">
									<div class="col-lg-5 col-md-6">
										<div class="single-product">
											<div class="product-details">
												<div class="header-1">
													<p>{{ $kamar->quantity }} kamar tersisa.</p>
												</div>
												<div class="header-2" style="margin-top: 3px; font-size: large">
													<h3>{{ $kamar->address }}</h3>
													<h5>Rp{{ $kamar->price }}</h5>
						
													<h5 style="color: darkorange">{{ $kamar->category }}</h5>
													<p>{{ $kamar->facility }}</p>
												</div>
												<br>
												<div class="header=3">
													<h6>Kontak: {{ $kamar->contact }}(WhatsApp)</p>
												</div>
												<div class="prd-bottom">
													<a href="" class="social-info">
														<span class="lnr lnr-heart"></span>
														<p class="hover-text">Wishlist</p>
													</a>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-7">
										<div class="banner-img">
											<img class="img-fluid"  style="height: 400px" src="kamar/{{ $kamar->image }}" alt="">
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

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