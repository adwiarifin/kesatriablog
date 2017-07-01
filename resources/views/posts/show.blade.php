@extends('layouts.master')

@section('content')
<div class="col-sm-8 blog-main">
    <div class="blog-post">
        <h2 class="blog-post-title"><a href="{{ url('/posts/'.$post->slug) }}">{{ $post->title }}</a></h2>
        <p class="blog-post-meta">{{ $post->created_at->toFormattedDateString() }} by <a href="#">{{ $post->user->firstname }}</a></p>
        
        @if(Auth::check() && (Auth::user()->firstname.' '.Auth::user()->lastname == $post->user->firstname.' '.$post->user->lastname))
            <p>
                <form method="POST" action="{{ url('/posts/'.$post->slug) }}" class="form-inline">
                    {{ csrf_field() }}
                    {{ method_field('delete') }}
                    <a href="{{ url('/posts/'.$post->slug.'/edit') }}" class="btn btn-sm btn-warning">Edit</a> &nbsp;
                    <button type="submit" name="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure want to delete this post?')">Delete</button>
                </form>
            </p>
        @endif
        
        

        {!! $post->body !!}

        
    </div>
    <!-- /.blog-post -->
</div>
<!-- /.blog-main -->
@endsection