@extends('sparkling.master')

@section('content')
                            <main id="main" class="site-main" role="main">
                                
                                @foreach($posts as $post)
                                <article id="post-{{ $post->id }}" class="hentry">
                                    <div class="blog-item-wrap">
                                        <div class="post-inner-content">
                                            <header class="entry-header page-header">
                                                <h2 class="entry-title"><a href="{{ url('/posts/'.$post->slug) }}" title="{{ $post->title }}" rel="bookmark">{{ $post->title }}</a></h2>

                                                <div class="entry-meta">
                                                    <span class="posted-on"><i class="fa fa-calendar"></i> <a href="{{ url('/posts/'.$post->slug) }}" rel="bookmark"><time class="entry-date published" datetime="{{ $post->created_at->toAtomString() }}">{{ $post->created_at->toFormattedDateString() }}</time><time class="updated" datetime="{{ $post->updated_at->toAtomString() }}">{{ $post->updated_at->toFormattedDateString() }}</time></a></span><span class="byline"> <i class="fa fa-user"></i> <span class="author vcard"><a class="url fn n" href="#">{{ $post->user->firstname }}</a></span></span>

                                                </div>
                                                <!-- .entry-meta -->
                                            </header>
                                            <!-- .entry-header -->

                                            <div class="entry-content">

                                                {!! $post->body !!}
                                                <p><a class="btn btn-default read-more" href="{{ url('/posts/'.$post->slug) }}" title="{{ $post->title }}">Read More</a></p>

                                            </div><!-- .entry-content -->
                                        </div>
                                    </div>
                                </article><!-- #post-## -->
                                @endforeach

                                {{ $posts->links('sparkling.pagination') }}
                                <!--nav class="navigation pagination" role="navigation">
                                    <h2 class="screen-reader-text">Posts navigation</h2>
                                    <div class="nav-links">
                                        <span class='page-numbers current'>1</span>
                                        <a class='page-numbers' href='https://colorlib.com/sparkling/page/2/'>2</a>
                                        <span class="page-numbers dots">&hellip;</span>
                                        <a class='page-numbers' href='https://colorlib.com/sparkling/page/8/'>8</a>
                                        <a class="next page-numbers" href="https://colorlib.com/sparkling/page/2/">Older posts <i class="fa fa-chevron-right"></i></a>
                                    </div>
                                </nav-->
                            </main><!-- #main -->
@endsection