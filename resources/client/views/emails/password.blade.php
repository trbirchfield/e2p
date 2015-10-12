@extends('client::layouts.email')

@section('content')
	<p>{{ $user->fname }},</p>
	<p>Use the following link to change your password:</p>
	<p>{{ route('password.reset', [$token]) }}</p>
@stop
