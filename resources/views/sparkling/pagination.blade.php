@if ($paginator->hasPages())
                                <nav class="navigation pagination" role="navigation">
                                    <h2 class="screen-reader-text">Posts navigation</h2>
                                    <div class="nav-links">
                                        {{-- Previous Page Link --}}
                                        @if(!$paginator->onFirstPage())    
                                            <a class="prev page-numbers" href="{{ $paginator->previousPageUrl() }}"><i class="fa fa-chevron-left"></i> Newer posts</a>
                                        @endif

                                        @foreach($elements as $element)
                                            {{-- "Three Dots" Separator --}}
                                            @if (is_string($element))
                                                <span class="page-numbers dots">&hellip;</span>
                                            @endif

                                            {{-- Array Of Links --}}
                                            @if (is_array($element))
                                                @foreach ($element as $page => $url)
                                                    @if ($page == $paginator->currentPage())
                                                        <span class='page-numbers current'>{{ $page }}</span>
                                                    @else
                                                        <a class='page-numbers' href='{{ $url }}'>{{ $page }}</a>
                                                    @endif
                                                @endforeach
                                            @endif
                                        @endforeach

                                        {{-- Next Page Link --}}
                                        @if ($paginator->hasMorePages())
                                            <a class="next page-numbers" href="{{ $paginator->nextPageUrl() }}">Older posts <i class="fa fa-chevron-right"></i></a>
                                        @endif
                                    </div>
                                </nav>
@endif
