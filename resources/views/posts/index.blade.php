@extends('layouts.master')

@section('content')
<div class="col-sm-8 blog-main">
    @foreach($posts as $post)
        <div class="blog-post">
            <h2 class="blog-post-title"><a href="{{ url('/posts/'.$post->slug) }}">{{ $post->title }}</a></h2>
            <p class="blog-post-meta">
                {{ $post->created_at->toFormattedDateString() }} 
                by <a href="#">{{ $post->user->firstname }}</a>
                @if(count($post->tags) > 0)
                    Under the tag:
                    @foreach($post->tags as $tag)
                        <a href="{{ url('/posts/tags/' . $tag->name) }}">{{ $tag->name }}</a><?php echo $tag != $post->tags->last() ? ", " : ""; ?>
                    @endforeach
                @endif
            </p>
            

            {!! $post->body !!}
        </div>
        <!-- /.blog-post -->
    @endforeach

    <nav class="blog-pagination">
        <a class="btn btn-outline-primary" href="#">Older</a>
        <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
    </nav>

</div>
<!-- /.blog-main -->
@endsection