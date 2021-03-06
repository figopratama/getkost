<!-- Start Header Area -->
	<header class="header_area sticky-header">
		<div class="main_menu">
			<nav class="navbar navbar-expand-lg navbar-light main_box">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<a class="navbar-brand logo_h" href="/"><img src="img/fav.png" alt=""></a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						<ul class="nav navbar-nav menu_nav ml-auto">
							<li class="nav-item">
								<a class="nav-link" href="/">
									Beranda
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="/katalogkamar" >
									Katalog Kamar
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="/faq">
									FAQ
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="/tentangkami">
									Tentang Kami
								</a>
							</li>
						</ul>
						<ul class="nav navbar-nav menu_nav">
							@if (Route::has('login'))
								@auth
								<li class="nav-item">
									<x-app-layout>
									
									</x-app-layout>
								</li>
								@else
								<li class="nav-item submenu dropdown" style="margin-left: 45px; margin-right:10px">
									<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"aria-expanded="false">
										Akun
									</a>
									<ul class="dropdown-menu">
										<li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Login</a></li>
										<li class="nav-item"><a class="nav-link" href="{{ url('register') }}">Register</a></li>
									</ul>
								</li>
								@endauth
							@endif
						</ul>
						<ul class="nav navbar-nav navbar-right">
							<li class="nav-item">
								<a href="/wishlist" class="social-info"><span class="lnr lnr-heart"></span>
								</a>
							</li>
							<li class="nav-item">
								<button class="search"><span class="lnr lnr-magnifier" id="search"></span>
								</button>
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