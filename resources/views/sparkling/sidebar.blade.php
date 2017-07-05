                        <div class="well">
                            <aside id="search-2" class="widget widget_search">
                                <form role="search" method="get" class="form-search" action="https://colorlib.com/sparkling/">
                                    <div class="input-group">
                                        <label class="screen-reader-text" for="s">Search for:</label>
                                        <input type="text" class="form-control search-query" placeholder="Search&hellip;" value="" name="s" title="Search for:" />
                                        <span class="input-group-btn">
                                            <button type="submit" class="btn btn-default" name="submit" id="searchsubmit" value="Search"><span class="glyphicon glyphicon-search"></span></button>
                                        </span>
                                    </div>
                                </form>
                            </aside>
                            <aside id="sparkling-social-2" class="widget sparkling-social">
                                <h3 class="widget-title">Follow us</h3>
                                <!-- social icons -->
                                <div class="social-icons sticky-sidebar-social">

                                    <nav id="menu-social" class="social-icons">
                                        <ul id="menu-social-items" class="social-menu">
                                            <li id="menu-item-2036" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2036"><a href="https://twitter.com/colorlib"><i class="social_icon fa"><span>Twitter</span></i></a></li>
                                            <li id="menu-item-2037" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2037"><a href="https://www.facebook.com/colorlib"><i class="social_icon fa"><span>Follow us on Facebook</span></i></a></li>
                                            <li id="menu-item-2038" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2038"><a href="https://www.youtube.com/channel/UCOaovjLNXdIch2vLFsw_uew"><i class="social_icon fa"><span>Follow us on Youtube</span></i></a></li>
                                            <li id="menu-item-2039" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2039"><a href="https://plus.google.com/+Colorlib"><i class="social_icon fa"><span>Follow us on Google+</span></i></a></li>
                                            <li id="menu-item-2040" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2040"><a href="https://github.com/puikinsh/"><i class="social_icon fa"><span>Follow us on Github</span></i></a></li>
                                        </ul>
                                    </nav>
                                </div>
                                <!-- end social icons -->
                            </aside>
                            <aside id="sparkling_popular_posts-2" class="widget sparkling-popular-posts">
                                <h3 class="widget-title">Recent Posts</h3>
                                
                                <!-- popular posts -->
                                <div class="popular-posts-wrapper">

                                    @foreach($recents as $post)
                                    <!-- post -->
                                    <div class="post">
                                        <!-- image -->
                                        <div class="post-image ">
                                            <a href="{{ url('posts/'.$post->slug) }}">
                                                <img width="60" height="60" src="http://via.placeholder.com/60x60" />
                                            </a>
                                        </div><!-- end post image -->

                                        <!-- content -->
                                        <div class="post-content">
                                            <a href="{{ url('posts/'.$post->slug) }}">{{ $post->title }}</a>
                                            <span class="date">{{ $post->created_at->toFormattedDateString() }}</span>
                                        </div><!-- end content -->

                                    </div><!-- end post -->
                                    @endforeach

                                </div><!-- end posts wrapper -->

                            </aside>
                            <aside id="sparkling-cats-2" class="widget sparkling-cats">
                                <h3 class="widget-title">Archives</h3>

                                <div class="cats-widget">

                                    <ul>
                                        @foreach($archives as $archive)
                                        <li class="cat-item"><a href="{{ url('/') }}?month={{ $archive->month }}&year={{ $archive->year }}">{{ $archive->month }} {{ $archive->year }}</a> <span>{{ $archive->published }}</span>
                                        </li>
                                        @endforeach
                                    </ul>

                                </div>
                                <!-- end widget content -->

                            </aside>
                            
                            <aside id="tag_cloud-2" class="widget widget_tag_cloud">
                                <h3 class="widget-title">Tags</h3>
                                <div class="tagcloud">
                                    <?php $position = 1; ?>
                                    @foreach($tags as $tag)
                                        <a href="{{ url('/posts/tags/'.$tag->name) }}" class="tag-cloud-link tag-link-{{ $tag->id }} tag-link-position-{{ $position++ }}" aria-label="{{ $tag->name }}" style=>{{ $tag->name }}</a>
                                    @endforeach
                            </aside>
                        </div>