<!DOCTYPE html>
<!--[if !IE]>
<html class="no-js non-ie" lang="en-US" prefix="og: http://ogp.me/ns#"> <![endif]-->
<!--[if IE 7 ]>
<html class="no-js ie7" lang="en-US" prefix="og: http://ogp.me/ns#"> <![endif]-->
<!--[if IE 8 ]>
<html class="no-js ie8" lang="en-US" prefix="og: http://ogp.me/ns#"> <![endif]-->
<!--[if IE 9 ]>
<html class="no-js ie9" lang="en-US" prefix="og: http://ogp.me/ns#"> <![endif]-->
<!--[if gt IE 9]><!-->
<html class="no-js" lang="en-US" prefix="og: http://ogp.me/ns#">
<!--<![endif]-->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <title>Sparkling - Free flat design WordPress theme developed using Bootstrap 3 and is well suited for blogs, portfolio, design, photography and other creative websites</title>

    <meta name="description" content="Free flat design WordPress theme developed using Bootstrap 3 and is well suited for blogs, portfolio, design, photography and other creative websites" />
    <link rel="canonical" href="https://colorlib.com/sparkling/" />
    <link rel="next" href="https://colorlib.com/sparkling/page/2/" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Sparkling - Free flat design WordPress theme developed using Bootstrap 3 and is well suited for blogs, portfolio, design, photography and other creative websites" />
    <meta property="og:description" content="Free flat design WordPress theme developed using Bootstrap 3 and is well suited for blogs, portfolio, design, photography and other creative websites" />
    <meta property="og:url" content="https://colorlib.com/sparkling/" />
    <meta property="og:site_name" content="Sparkling" />
    
    <link rel="dns-prefetch" href="//secure.gravatar.com" />
    <link rel="dns-prefetch" href="//fonts.googleapis.com" />
    <link rel="alternate" type="application/rss+xml" title="Sparkling &raquo; Feed" href="https://colorlib.com/sparkling/feed/" />
    <link rel="alternate" type="application/rss+xml" title="Sparkling &raquo; Comments Feed" href="https://colorlib.com/sparkling/comments/feed/" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" id="sparkling-bootstrap-css" href="{{ asset("/themes/sparkling/css/bootstrap.min.css") }}" type="text/css" media="all" />
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" id="sparkling-icons-css" href="{{ asset('/themes/sparkling/css/font-awesome.min.css') }}" type="text/css" media="all" />
    <!-- Google Font CSS -->
    <link rel="stylesheet" id="sparkling-fonts-css" href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto+Slab" type="text/css" media="all" />
    <!-- Sparkling Custom CSS -->
    <link rel="stylesheet" id="sparkling-style-css" href="{{ asset('/themes/sparkling/css/style.css') }}" type="text/css" media="all" />

    <!-- Favicon -->
    <link rel="icon" href="https://cdn.colorlib.com/sparkling/wp-content/uploads/sites/5/2014/11/cropped-colorlib-logo-square1-32x32.png" sizes="32x32" />
    <link rel="icon" href="https://cdn.colorlib.com/sparkling/wp-content/uploads/sites/5/2014/11/cropped-colorlib-logo-square1-192x192.png" sizes="192x192" />
    <link rel="apple-touch-icon-precomposed" href="https://cdn.colorlib.com/sparkling/wp-content/uploads/sites/5/2014/11/cropped-colorlib-logo-square1-180x180.png" />
    <meta name="msapplication-TileImage" content="https://cdn.colorlib.com/sparkling/wp-content/uploads/sites/5/2014/11/cropped-colorlib-logo-square1-270x270.png" />
</head>

<body class="home blog group-blog">
    <a class="sr-only sr-only-focusable" href="#content">Skip to main content</a>
    <div id="page" class="hfeed site">

        @include('sparkling.header')

        <div id="content" class="site-content">

            @include('sparkling.slider')

            <div class="container main-content-area">
                <div class="row side-pull-left">
                    <div class="main-content-inner col-sm-12 col-md-8">
                        <div id="primary" class="content-area">
                            @yield('content')
                        </div><!-- #primary -->

                    </div>
                    <div id="secondary" class="widget-area col-sm-12 col-md-4" role="complementary">
                        @include('sparkling.sidebar')
                    </div><!-- #secondary -->
                </div><!-- close .row -->
            </div><!-- close .container -->
        </div><!-- close .site-content -->

        @include('sparkling.footer')
    </div><!-- #page -->

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="{{ asset('/themes/sparkling/js/modernizr.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/themes/sparkling/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/themes/sparkling/js/functions.min.js') }}"></script>
</body>

</html>