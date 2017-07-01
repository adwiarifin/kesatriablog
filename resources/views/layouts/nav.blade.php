<div class="blog-masthead">
    <nav class="navbar navbar-toggleable-md">
        <div class="container">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarsExampleContainer" aria-controls="navbarsExampleContainer" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarsExampleContainer">
                <ul class="nav navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ url('/') }}">Home <span class="sr-only">(current)</span></a>
                    </li>
                </ul>
                <ul class="nav navbar-nav">
                    @if(Auth::check())
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown02" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->firstname }} {{ Auth::user()->lastname }}</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown02">
                            <a class="dropdown-item" href="{{ url('/posts/create') }}">Create a Post</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{ url('/logout') }}">Logout</a>
                        </div>
                    </li>
                    @else
                    <li class="nav-item"><a class="nav-link" href="{{ url('/login') }}">Login</a></li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
</div>