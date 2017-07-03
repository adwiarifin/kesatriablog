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

    @include('sparkling.wp_head')
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
                            @include('sparkling.content')
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

    @include('sparkling.wp_footer')
</body>

</html>