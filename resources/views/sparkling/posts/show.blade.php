@extends('sparkling.master')

@section('content')
							<main id="main" class="site-main" role="main">

							    <article id="post-{{ $post->id }}" class="hentry">
							        <div class="post-inner-content">
							            <header class="entry-header page-header">

							                <h1 class="entry-title ">{{ $post->title }}</h1>

							                <div class="entry-meta">
							                    <span class="posted-on"><i class="fa fa-calendar"></i> <a href="{{ url('/posts/'.$post->slug) }}" rel="bookmark"><time class="entry-date published" datetime="{{ $post->created_at->toAtomString() }}">{{ $post->created_at->toFormattedDateString() }}</time><time class="updated" datetime="{{ $post->updated_at->toAtomString() }}">{{ $post->updated_at->toFormattedDateString() }}</time></a></span><span class="byline"> <i class="fa fa-user"></i> <span class="author vcard"><a class="url fn n" href="{{ url('/posts/users/'.$post->user->id) }}">{{ $post->user->firstname }}</a></span></span>
							                    @if(count($post->tags) > 0)
							                    <span class="cat-links"><i class="fa fa-tags"></i>
								                    @foreach($post->tags as $tag)
								                        <a href="{{ url('/posts/tags/' . $tag->name) }}" rel="category tag">{{ $tag->name }}</a>{{ $tag != $post->tags->last() ? ", " : "" }}
								                    @endforeach
							                    </span>
							                    @endif

							                </div>
							                <!-- .entry-meta -->
							            </header>
							            <!-- .entry-header -->

							            <div class="entry-content">
							                {!! $post->body !!}
							            </div>
							            <!-- .entry-content -->

							            <footer class="entry-meta">

							                <!-- tags -->
							                <div class="tagcloud" style="display: block;">
							                	@foreach($post->tags as $tag)
							                        <a href="{{ url('/posts/tags/' . $tag->name) }}">{{ $tag->name }}</a>
							                    @endforeach
							                </div>
							                <!-- end tags -->

							            </footer>
							            <!-- .entry-meta -->
							        </div>

							        <div class="post-inner-content secondary-content-box">
							            <!-- author bio -->
							            <div class="author-bio content-box-inner">

							                <!-- avatar -->
							                <div class="avatar">
							                	<img src="{{ Gravatar::src($post->user->email) }}" class="avatar avatar-60 photo grav-hashed grav-hijack" height="60" width="60">
						                	</div>
							                <!-- end avatar -->

							                <!-- user bio -->
							                <div class="author-bio-content">

							                    <h4 class="author-name"><a href="https://colorlib.com/sparkling/author/aigars-silkalns/">{{ $post->user->firstname }} {{ $post->user->lastname }}</a></h4>
							                    <p class="author-description">
							                        Frontend web developer and web designer specialized in free and premium WordPress theme development. Started to learn to code 2 years ago and now I am familiar with CSS/HTML/JavaScript (jQuery) and PHP. Obsessed with application performance, user experience and simplicity. </p>

							                </div>
							                <!-- end .author-bio-content -->

							            </div>
							            <!-- end .author-bio  -->

							        </div>

							    </article>
							    <!-- #post-## -->

							</main>
@endsection