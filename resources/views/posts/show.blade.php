@extends('layouts.master')

@section('content')
<div class="col-sm-8 blog-main">
    <div class="blog-post">
        <h2 class="blog-post-title"><a href="{{ url('/posts/'.$post->slug) }}">{{ $post->title }}</a></h2>
        <p class="blog-post-meta">{{ $post->created_at->toFormattedDateString() }} by <a href="#">{{ $post->user->firstname }}</a></p>

        {{ $post->body }}
    </div>
    <!-- /.blog-post -->
</div>
<!-- /.blog-main -->
@endsection