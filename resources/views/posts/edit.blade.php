@extends('layouts.master')

@section('content')
<div class="col-sm-8 blog-main">
	<h1>Edit a post</h1>
	<hr>

	<form method="POST" action="{{ url('/posts/'.$post->slug) }}">
		{{ csrf_field() }}
		{{ method_field('patch') }}
		
		@if(count($errors) > 0)
			@include('layouts.errors')
		@endif
		
		<div class="form-group">
			<label for="title">Title</label>
			<input type="text" name="title" id="title" class="form-control" value="{{ $post->title }}">
		</div>

		<div class="form-group">
			<label for="body">Body</label>
			<textarea id="body" name="body" class="form-control">{{ $post->body }}</textarea>
			@ckeditor('body')
		</div>

		<div class="form-group">
			<button type="submit" class="btn btn-primary">Update</button>
			<a class="btn btn-secondary" href="{{ url()->previous() }}">Back</a>
		</div>
	</form>
</div>
@endsection