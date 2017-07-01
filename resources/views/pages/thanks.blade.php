@extends('layouts.master')

@section('content')
	<div class="col-sm-8 blog-main">
		<h1>Thank You</h1>
		<!--p>Thank you for registering to us, please check your email for your activation link.</p-->
		<p><a href="{{ url('/login') }}">Click here</a> to go to login page.</p>
	</div>
@endsection