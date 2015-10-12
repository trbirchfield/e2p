@extends('client::layouts.master')

@section('template')
	@include('client::partials.header')
	@yield('content')
	@include('client::partials.footer')
@stop
