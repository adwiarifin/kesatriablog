@extends('layouts.master')

@section('content')
<div class="col-sm-8 blog-main">
	<h1>Create a post</h1>
	<hr>

	<form method="POST" action="{{ url('/posts') }}">
		{{ csrf_field() }}

		@if(count($errors) > 0)
			@include('layouts.errors')
		@endif

		<div class="form-group">
			<label for="title">Title</label>
			<input type="text" name="title" id="title" class="form-control" value="{{ old('title') }}">
		</div>

		<div class="form-group">
			<label for="body">Body</label>
			<textarea id="body" name="body" class="form-control">{{ old('body') }}</textarea>
			@ckeditor('body')
		</div>

		<div class="form-group">
			<label for="tag">Tag</label>
			<input type="text" name="tag" id="tag" class="form-control" value="{{ old('tag') }}">
		</div>

		<div class="form-group">
			<button type="submit" class="btn btn-primary">Publish</button>
			<a class="btn btn-secondary" href="{{ url()->previous() }}">Back</a>
		</div>
	</form>
</div>
@endsection