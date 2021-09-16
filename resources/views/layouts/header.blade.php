<div id="site-content">
			<header class="site-header">
				<div class="container">
					<a href="{{route('front-end.index')}}" id="branding">
						<img src="{{asset('assets/images/logo.png')}}" alt="" class="logo">
						<div class="logo-copy">
							<h1 class="site-title">Yes Company</h1>
							<small class="site-description">Tagline goes here</small>
						</div>
					</a> <!-- #branding -->

					<div class="main-navigation">
						<button type="button" class="menu-toggle"><i class="fa fa-bars"></i></button>
						<ul class="menu">
							<li class="menu-item {{ session('topbar')=='home' ? 'current-menu-item' :null }}"><a href="{{route('front-end.index')}}">Home</a></li>
							<li class="menu-item {{ session('topbar')=='about' ? 'current-menu-item' :null }}"><a href="{{route('about')}}">About</a></li>
							<li class="menu-item {{ session('topbar')=='join' ? 'current-menu-item' :null }}"><a href="{{route('join-us')}}">Join us</a></li>
							<li class="menu-item {{ session('topbar')=='contact' ? 'current-menu-item' :null }}"><a href="{{route('contact-us')}}">Contact</a></li>
						</ul> <!-- .menu -->

						<form action="#" class="search-form">
							<input type="text" placeholder="Search...">
							<button><i class="fa fa-search"></i></button>
						</form>
					</div> <!-- .main-navigation -->

					<div class="mobile-navigation"></div>
				</div>
			</header>