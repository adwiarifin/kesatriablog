@extends('layouts.master')

@section('content')
	<div class="col-md-8">
		<h1>Login</h1>
		<form method="POST" action="{{ url('/register') }}">
			{{ csrf_field() }}

			@if(count($errors) > 0)
				@include('layouts.errors')
			@endif

			<div class="form-group">
				<label for="firstname">Firstname:</label>
				<input type="text" class="form-control" id="firstname" name="firstname" required />
			</div>

			<div class="form-group">
				<label for="lastname">Lastname:</label>
				<input type="text" class="form-control" id="lastname" name="lastname" required />
			</div>

			<div class="form-group">
				<label for="email">Email Address:</label>
				<input type="email" class="form-control" id="email" name="email" required />
			</div>

			<div class="form-group">
				<label for="password">Password:</label>
				<input type="password" class="form-control" id="password" name="password" required />
			</div>

			<div class="form-group">
				<label for="password_confirmation">Password Confirmation:</label>
				<input type="password" class="form-control" id="password_confirmation" name="password_confirmation" />
			</div>

			<div class="form-group">
				<button type="submit" class="btn btn-primary">Register</button>
			</div>
		</form>
	</div>
@endsection