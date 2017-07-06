        <header id="masthead" class="site-header" role="banner">
            <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
                <div class="container">
                    <div class="row">
                        <div class="site-navigation-inner col-sm-12">
                            <div class="navbar-header">
                                <button type="button" class="btn navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
                            
                            <div id="logo">
                                <h1 class="site-name"> <a class="navbar-brand" href="{{ url('/') }}" title="Sparkling" rel="home">Kesatria's Blog</a>
                                </h1>
                            </div><!-- end of #logo -->

                            </div>
                            <div class="collapse navbar-collapse navbar-ex1-collapse">
                                <ul id="menu-top" class="nav navbar-nav">
                                    <li class="menu-item active">
                                        <a href="{{ url('/') }}">Home <span class="sr-only">(current)</span></a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="{{ url('/about') }}">About</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="{{ url('/contact') }}">Contact</a>
                                    </li>
                                    @if(Auth::check())
                                    <li class="menu-item dropdown">
                                        <a class="dropdown-toggle" href="#" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> {{ Auth::user()->firstname }} {{ Auth::user()->lastname }} <span class="caret"></a>
                                        <ul role="menu" class=" dropdown-menu">
                                            <li class="menu-item"><a href="{{ url('/posts/create') }}"><span class="glyphicon glyphicon-file"></span> Create a Post</a></li>
                                            <li class="divider" role="presentation"></li>
                                            <li class="menu-item"><a title="Logout" href="{{ url('/logout') }}"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                                        </ul>
                                    </li>
                                    @else
                                    <li class="menu-item"><a href="{{ url('/login') }}"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                                    @endif

                                    <!--li id="menu-item-1773" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-1773 active">
                                        <a title="Home" href="https://colorlib.com/sparkling/">Home</a>
                                    </li>
                                    <li id="menu-item-1800" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1800">
                                        <a title="Download" href="https://colorlib.com/wp/themes/sparkling/">Download</a>
                                    </li>
                                    <li id="menu-item-2024" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2024">
                                        <a title="Gallery" href="https://colorlib.com/sparkling/gallery/">Gallery</a>
                                    </li>
                                    <li id="menu-item-1911" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1911"><a title="Shortcodes" href="https://colorlib.com/sparkling/sparkling-shortcodes/">Shortcodes</a></li>
                                    <li id="menu-item-1774" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-1774 dropdown"><a title="About" href="#" data-toggle="dropdown" class="dropdown-toggle">About <span class="caret"></span></a>
                                        <ul role="menu" class=" dropdown-menu">
                                            <li id="menu-item-1782" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1782"><a title="Contact us" href="https://colorlib.com/sparkling/contact-us/"><span class="glyphicon glyphicon-envelope"></span>&nbsp;Contact us</a></li>
                                            <li id="menu-item-1788" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1788"><a title="Languages" href="https://colorlib.com/sparkling/languages/">Languages</a></li>
                                            <li id="menu-item-1789" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1789"><a title="Full Width Page" href="https://colorlib.com/sparkling/full-width/"><span class="glyphicon glyphicon-align-justify"></span>&nbsp;Full Width Page</a></li>
                                            <li id="menu-item-1775" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1775"><a title="Page Image Alignment" href="https://colorlib.com/sparkling/about/page-image-alignment/"><span class="glyphicon glyphicon-picture"></span>&nbsp;Page Image Alignment</a></li>
                                            <li id="menu-item-1776" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1776"><a title="Page Markup And Formatting" href="https://colorlib.com/sparkling/about/page-markup-and-formatting/"><span class="glyphicon glyphicon-leaf"></span>&nbsp;Page Markup And Formatting</a></li>
                                            <li role="presentation" class="dropdown-header">Comment options</li>
                                            <li role="presentation" class="divider"></li>
                                            <li id="menu-item-1778" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1778"><a title="Page with comments" href="https://colorlib.com/sparkling/about/page-with-comments/"><span class="glyphicon glyphicon-comment"></span>&nbsp;Page with comments</a></li>
                                            <li id="menu-item-1779" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1779"><a title="Page with comments disabled" href="https://colorlib.com/sparkling/about/page-with-comments-disabled/"><span class="glyphicon glyphicon-remove"></span>&nbsp;Page with comments disabled</a></li>
                                            <li role="presentation" class="dropdown-header">More options</li>
                                            <li role="presentation" class="divider"></li>
                                            <li role="presentation" class="disabled"><a href="#">This item is disabled</a></li>
                                        </ul>
                                    </li>
                                    <li id="menu-item-2049" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2049"><a title="Shop" href="https://colorlib.com/sparkling/shop/"><span class="glyphicon glyphicon-shopping-cart"></span>&nbsp;Shop</a></li-->
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </nav><!-- .site-navigation -->
        </header><!-- #masthead -->