@extends('client::layouts.master')

@section('template')
	@include('client::partials.header')
	@if (Request::segment(1) != NULL and Request::segment(1) != 'home')
		<section class="section-title {{ (!empty($section) and $section > 3) ? 'green' : 'blue' }}">
			<div class="row">
				<div class="small-12 columns">
					<h1>{{ $page_title }}</h1>
				</div>
			</div>
		</section>
	@endif
	@yield('content')
	@if (!empty($section))
		@include('client::partials.tabs')
	@else
		@include('client::partials.footer')
	@endif
@stop
