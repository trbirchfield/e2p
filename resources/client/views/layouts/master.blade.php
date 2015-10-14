<!DOCTYPE html>
<!--[if lt IE 9]><html class="no-js lt-ie9" id="ng-app" ng-app="app"><![endif]-->
<!--[if gt IE 8]><!--><html class="no-js" id="ng-app" ng-app="app"><!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

        {{-- Document title --}}
        <title>{{ $doc_title() }}</title>

        {{-- Metadata --}}
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="author" content="White Lion Interactive">
        <link rel="author" href="http://wlion.com">
        @yield('metadata')
        <meta property="og:title" content="Is your organization interested in providing evidence-based programs for seniors? Find resources in this Toolkit to help you implement these programs well."/>
        <meta property="og:type" content="website"/>
        <meta property="og:url" content="http://www.evidencetoprograms.com"/>
        <meta property="og:image" content="http://www.evidencetoprograms.com/images/icons/evidence_to_programs.jpg"/>

        {{-- Icons --}}
        <link rel="shortcut icon" href="{{ asset_path('img/icons/favicon.ico') }}"/>
        <link rel="apple-touch-icon" sizes="57x57" href="{{ asset_path('img/icons/apple-touch-icon-57x57.png') }}" />
        <link rel="apple-touch-icon" sizes="114x114" href="{{ asset_path('img/icons/apple-touch-icon-114x114.png') }}" />
        <link rel="apple-touch-icon" sizes="72x72" href="{{ asset_path('img/icons/apple-touch-icon-72x72.png') }}" />
        <link rel="apple-touch-icon" sizes="144x144" href="{{ asset_path('img/icons/apple-touch-icon-144x144.png') }}" />
        <link rel="apple-touch-icon" sizes="60x60" href="{{ asset_path('img/icons/apple-touch-icon-60x60.png') }}" />
        <link rel="apple-touch-icon" sizes="120x120" href="{{ asset_path('img/icons/apple-touch-icon-120x120.png') }}" />
        <link rel="apple-touch-icon" sizes="76x76" href="{{ asset_path('img/icons/apple-touch-icon-76x76.png') }}" />
        <link rel="icon" type="image/png" href="{{ asset_path('img/icons/favicon-96x96.png') }}" sizes="96x96" />
        <link rel="icon" type="image/png" href="{{ asset_path('img/icons/favicon-32x32.png') }}" sizes="32x32" />
        <link rel="icon" type="image/png" href="{{ asset_path('img/icons/favicon-16x16.png') }}" sizes="16x16" />
        <meta name="msapplication-TileColor" content="#ffffff" />
        <meta name="msapplication-TileImage" content="{{ asset_path('img/icons/mstile-144x144.png') }}" />
        <meta name="msapplication-square70x70logo" content="{{ asset_path('img/icons/mstile-70x70.png') }}" />
        <meta name="msapplication-square144x144logo" content="{{ asset_path('img/icons/mstile-144x144.png') }}" />
        <meta name="msapplication-square150x150logo" content="/imgagesicons/mstile-150x150.png') }}" />
        <meta name="msapplication-square310x310logo" content="{{ asset_path('img/icons/mstile-310x310.png') }}" />
        <meta name="msapplication-wide310x150logo" content="{{ asset_path('img/icons/mstile-310x150.png') }}" />


        {{-- Fonts --}}
        @section('fonts')
            <script type="text/javascript" src="//use.typekit.net/soy6vtc.js"></script>
            <script type="text/javascript">try{Typekit.load();}catch(e){}</script>
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
        <![endif]-->
    </head>
    <body class="{{ $body_class() }}" ng-controller="BaseController">
        {{-- Template --}}
        @yield('template')

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

        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function()
            { (i[r].q=i[r].q||[]).push(arguments)}
            ,i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
            ga('create', 'UA-47133090-1', 'evidencetoprograms.com');
            ga('send', 'pageview');
        </script>
    </body>
</html>
