{{ Debugbar::startMeasure('render','Time for rendering') }}
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>Kesatria Keyboard's Blog</title>

    <!-- Custom styles for this template -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>

    @include('layouts.nav')

    @if($flash = session('message'))
        <div id="flash-message" class="alert alert-success" role="alert">
            {{ $flash }}
        </div>
    @endif

    <div class="blog-header">
        <div class="container">
            <h1 class="blog-title">Kesatria Keyboard's Blog</h1>
            <p class="lead blog-description">An example blog template built with Bootstrap.</p>
        </div>
    </div>

    <div class="container">

        <div class="row">

            @yield('content')

            @include('layouts.sidebar')

        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->

    <footer class="blog-footer">
        <p>Blog template built for <a href="https://getbootstrap.com">Bootstrap</a> by <a href="https://twitter.com/mdo">@mdo</a>.</p>
        <p>
            <a href="#">Back to top</a>
        </p>
    </footer>

    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
{{ Debugbar::stopMeasure('render') }}