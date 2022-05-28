<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
	<style>
		* {
			box-sizing: border-box;
			margin: auto;
		}

		/* CSS property for content section */
		.columnA, .columnB, .columnC {
			margin-top: 50px;
			float: center;
			width: 31%;
			padding: 15px;
			text-align:center;
			
		}

		h2 {
			text-align:center;
		}

		h3 {
			text-align:center;
		}
		
		/* Media query to set website layout
		according to screen size */
		@media screen and (max-width:600px) {
			.columnA, .columnB, .columnC {
				width: 50%;
			}
		}
		@media screen and (max-width:400px) {
			.columnA, .columnB, .columnC {
				width: 100%;
			}
		}
	</style>
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

	<div class="flex flex-col text-center w-full mb-20" style="margin-top: 150px; margin-bottom: 50px;">
		<h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Frequently Asked Question</h1>
	</div>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
	<div class="" style="margin: auto; width: 50%">
		<div class="accordion" id="myAccordion">
			<div class="accordion-item">
				<h2 class="accordion-header" id="headingOne">
					<button type="button" class="accordion-button" data-bs-toggle="collapse" data-bs-target="#collapseOne">Apa itu GetKost?</button>									
				</h2>
				<div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#myAccordion">
					<div class="card-body">
						<p>GetKost adalah sistem informasi berbasis web yang menyediakan daftar rumah kost yang tersedia di Kota Surabaya.</p>
					</div>
				</div>
			</div>
			<div class="accordion-item">
				<h2 class="accordion-header" id="headingTwo">
					<button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseTwo">Bisakah saya memesan kamar hanya dalam satu minggu?</button>
				</h2>
				<div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#myAccordion">
					<div class="card-body">
						<p>Tergantung pada pemilik rumah kost. Dan apabila bisa, harga bisa saja berubah karena harga yang tercantum pada website adalah harga per bulannya</p>
					</div>
				</div>
			</div>
			<div class="accordion-item">
				<h2 class="accordion-header" id="headingThree">
					<button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseThree">Bagaimana cara memesan kamar di GetKost?</button>
				</h2>
				<div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#myAccordion">
					<div class="card-body">
						<p>Langkah pertama yaitu dengan mengunjungi halaman Katalog Kamar, lalu lihat Detail Kamar. Pada halaman detail kamar tersedia kontak pemilik rumah kost yang dapat dihubungi.</p>
					</div>
				</div>
			</div>
			<div class="accordion-item">
				<h2 class="accordion-header" id="headingFour">
					<button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseFour">Mengapa harus GetKost?</button>                     
				</h2>
				<div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#myAccordion">
					<div class="card-body">
						<p>Karena nantinya GetKost akan terus dikembangkan sesuai dengan kebutuhan pasar.
							Seperti menambahkan fitur Wishlist yang dapat menyimpan data kamar yang disukai,
							memperluas jangkauan rumah kost yang tersedia, sehingga tidak hanya tersedia di Kota Surabaya namun juga kota-kota lain,
						Semua hal tersebut bertujuan untuk membuat user maupun pemilik kost lebih nyaman untuk bertransaksi pada website kami. </p>
					</div>
				</div>
			</div>
		</div>
	</div>		


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
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>