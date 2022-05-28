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

	<div class="flex flex-col text-center w-full mb-20" style="margin-top: 150px">
		<h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Our Team</h1>
		<p class="lg:w-2/3 mx-auto leading-relaxed text-base">Tim pengembang tergabung dari mahasiswa Manajemen Informatika Universitas Negeri Surabaya</p>
	</div>
	
	<!DOCTYPE html>
<html>
	
	<body>
		
		<div class = "row">			
			<div class = "columnA">
				<img alt="team" class="flex-shrink-0 rounded-lg w-full h-56 object-cover object-center mb-4" src="https://dummyimage.com/200x200">
				<h2 class="title-font font-medium text-lg text-gray-900">Figo Gymnastiar F. P.</h2>
				<h3 class="text-gray-500 mb-3">UI Developer</h3>
				<p class="mb-4">Dengan adanya website GetKosts, harapan saya yaitu agar dapat mempertemukan customer dengan pemilik kost menjadi lebih mudah.</p>
			</div>

			<div class = "columnB">
				<img alt="team" class="flex-shrink-0 rounded-lg w-full h-56 object-cover object-center mb-4" src="https://dummyimage.com/200x200">
				<h2 class="title-font font-medium text-lg text-gray-900">Nugroho Dwi Riyanto</h2>
				<h3 class="text-gray-500 mb-3">System Analyst</h3>
				<p class="mb-4">Dengan memanfaatkan perkembangan teknologi informasi dengan baik akan dapat membuka peluang bisnis baru menjadi lebih luass.</p>
			</div>

			<div class = "columnC">
				<img alt="team" class="flex-shrink-0 rounded-lg w-full h-56 object-cover object-center mb-4" src="https://dummyimage.com/200x200">
				<h2 class="title-font font-medium text-lg text-gray-900">Ari Kurniawan</h2>
				<h3 class="text-gray-500 mb-3">UI Developer</h3>
				<p class="mb-4">Visi kami sejalan dengan definisi Sistem Informasi itu sendiri yaitu dengan memangkas distribusi proses bisnis agar menjadi lebih singkat.</p>
			</div>
		</div>

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