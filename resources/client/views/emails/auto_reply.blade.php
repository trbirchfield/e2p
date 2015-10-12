@extends('client::layouts.email')

@section('content')
	<p>Thank you, {{ $name }}, for contacting {{ config('site.client.company_name') }}.</p>
	<p>We received your inquiry and will be in touch.</p>
@stop
