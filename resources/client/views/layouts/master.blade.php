<!DOCTYPE html>
<!--[if lt IE 9]><html class="no-js lt-ie9" id="ng-app" ng-app="app"><![endif]-->
<!--[if gt IE 8]><!--><html class="no-js gt-ie8" id="ng-app" ng-app="app"><!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		{{-- Document title --}}
		<title>{{ $doc_title() }}</title>

		{{-- Metadata --}}
		<meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
		<meta name="description" content="{{ (!empty($meta_description)) ? $meta_description : '' }}">
		<meta name="keywords" content="">
		<meta name="author" content="White Lion Interactive">
		<link rel="author" href="http://wlion.com">
		@yield('metadata')

		{{-- Icons --}}
		<link rel="shortcut icon" href="{{ asset_path('img/favicon.ico') }}">
		<link rel="apple-touch-icon" sizes="57x57" href="{{ asset_path('img/iphone_apple_touch_57x57.png') }}">
		<link rel="apple-touch-icon" sizes="72x72" href="{{ asset_path('img/ipad_72x72.png') }}">
		<link rel="apple-touch-icon" sizes="114x114" href="{{ asset_path('img/iphone4_retina_114x114.png') }}">
		<link rel="apple-touch-icon" sizes="144x144" href="{{ asset_path('img/ipad3_retina_144x144.png') }}">

		{{-- Fonts --}}
		@section('fonts')
			<link href='http://fonts.googleapis.com/css?family=Playfair+Display:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
			<script src="//use.typekit.net/icr3spi.js"></script>
			<script>try{Typekit.load();}catch(e){}</script>
		@show

		{{-- CSS --}}
		@section('css')
			<link rel="stylesheet" href="{{ asset_version('css/client/global.css') }}">
		@show

		{{-- Head JS --}}
		@section('head-js')
			<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
			<script>window.Modernizr || document.write('<script src="{{ asset_version('vendor/modernizr.js') }}">\x3C/script>');</script>
		@show

		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
			<script src="{{ asset_version('js/client/ie.js') }}"></script>
		<![endif]-->
	</head>
	<body class="{{ $body_class() }} logged-in" ng-controller="BaseController">
		<div id="top"></div>

		{{-- Template --}}
		@yield('template')

		{{-- Growl messages --}}
		<ul class="growls">
			@foreach ($growls() as $growl)
				<li class="growl {{ $growl['type'] }}">
					<div class="growl-title">
						{{ $growl['title'] }}
					</div>
					<div class="growl-message">
						{!! $growl['message'] !!}
					</div>
				</li>
			@endforeach
			<growls></growls>
		</ul>

		{{-- Footer JS --}}
		@section('footer-js')
			<script src="//code.jquery.com/jquery-2.1.3.min.js"></script>
			<script>window.jQuery || document.write('<script src="{{ asset_version('vendor/jquery.js') }}">\x3C/script>')</script>
			<script src="//code.jquery.com/ui/1.11.2/jquery-ui.min.js"></script>
			<script>window.jQuery.ui || document.write('<script src="{{ asset_version('vendor/jquery-ui.js') }}">\x3C/script>')</script>
			<script src="//cdnjs.cloudflare.com/ajax/libs/foundation/5.5.1/js/foundation.min.js"></script>
			<script>window.Foundation || document.write('<script src="{{ asset_version('vendor/foundation.js') }}">\x3C/script>')</script>
			<script src="//ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script>
			<script>window.angular || document.write('<script src="{{ asset_version('vendor/angular.js') }}">\x3C/script>')</script>
			<script src="//cdnjs.cloudflare.com/ajax/libs/lodash.js/3.5.0/lodash.min.js"></script>
			<script>window._ || document.write('<script src="{{ asset_version('vendor/lodash.js') }}">\x3C/script>')</script>
			<script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
			<script>window.moment || document.write('<script src="{{ asset_version('vendor/moment.js') }}">\x3C/script>')</script>
			<script src="{{ asset_version('vendor/scrollReveal.min.js') }}"></script>
			<script src="{{ asset_version('vendor/ui-utils.min.js') }}"></script>
			<script src="//cdn.jsdelivr.net/jquery.slick/1.5.0/slick.min.js"></script>
			<script>window.Slick || document.write('<script src="{{ asset_version('vendor/slick.js') }}">\x3C/script>')</script>
			<script src="//cdn.jsdelivr.net/jquery.scrollto/2.1.0/jquery.scrollTo.min.js"></script>
			<script>window.scrollTo || document.write('<script src="{{ asset_version('vendor/jquery.scrollTo.min.js') }}">\x3C/script>')</script>
			<script src="//cdn.jsdelivr.net/jquery.localscroll/1.4.0/jquery.localScroll.min.js"></script>
			<script>window.localScroll || document.write('<script src="{{ asset_version('vendor/jquery.localScroll.min.js') }}">\x3C/script>')</script>
			<script src="//cdnjs.cloudflare.com/ajax/libs/Chart.js/1.0.2/Chart.min.js"></script>
			<script>window.Chart || document.write('<script src="{{ asset_version('vendor/Chart.min.js') }}">\x3C/script>')</script>
			<script src="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.pack.js"></script>
			<script>window.fancyBox || document.write('<script src="{{ asset_version('vendor/jquery.fancybox.pack.js') }}">\x3C/script>')</script>
			<script src="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/helpers/jquery.fancybox-media.js"></script>
			<script>window.fancyBoxMedia || document.write('<script src="{{ asset_version('vendor/jquery.fancybox-media.js') }}">\x3C/script>')</script>
			<script src="{{ asset_version('vendor/jquery.timepicker.min.js') }}"></script>
			<script src="//cdnjs.cloudflare.com/ajax/libs/chosen/1.4.2/chosen.jquery.min.js"></script>
			<script>window.chosen || document.write('<script src="{{ asset_version('vendor/chosen.jquery.min.js') }}">\x3C/script>')</script>
			<script>
				window.csrf = '{{ csrf_token() }}';
				@yield('globals')
			</script>
			<script src="{{ asset_version('js/client/global.js') }}"></script>
			<script src="{{ asset_version('js/client/app.js') }}"></script>
		@show
	</body>
</html>
