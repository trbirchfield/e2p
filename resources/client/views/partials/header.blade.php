<!--[if lt IE 8]>
		<div class="old-browser">It looks like your browser is outdated. This site is best viewed in the latest versions of<br />Internet Explorer, Google Chrome, Firefox or Safari. Please <a href="http://browsehappy.com/" target="_blank">update your browser</a> for the optimal experience.</div>
<![endif]-->
<header>
	<div class="container">
		@if (Request::segment(1) == NULL or Request::segment(1) == 'home')
			<svg width="380" height="102" class="logo no-print">
				<image xlink:href="{{ asset_path('img/logo.svg') }}" src="{{ asset_path('img/logo.png') }}" width="380" height="102" />
			</svg>
		@else
			<a class="home-link" href="{{ route('home') }}"></a>
			<a class="logo no-print" href="{{ route('home') }}">
				<svg width="169" height="50">
					<image xlink:href="{{ asset_path('img/logo_small.svg') }}" src="{{ asset_path('img/logo_small.png') }}" width="169" height="50" alt="Logo"/>
				</svg>
			</a>
		@endif
		<img class="logo no-screen" src="{{ asset_path('img/logo_small.png') }}" alt="Logo" />
		<nav>
			<ul class="menu {!! (Request::segment(1) == NULL or Request::segment(1) == 'home') ? 'home-menu' : '' !!}">
				<li><a href="{{ route('about') }}">About Us</a></li>
				<li><a href="{{ route('contact') }}">Contact Us</a></li>
				<li><a href="{{ route('privacy') }}">Privacy Policy</a></li>
			</ul>
		</nav>
	</div>
</header>
