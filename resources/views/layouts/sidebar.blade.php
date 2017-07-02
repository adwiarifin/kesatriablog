<div class="col-sm-3 offset-sm-1 blog-sidebar">
    <div class="sidebar-module">
        <h4>Social Page</h4>
        <ol class="list-unstyled">
            <li><a href="#">GitHub</a></li>
            <li><a href="#">Twitter</a></li>
            <li><a href="#">Facebook</a></li>
        </ol>
    </div>
    
    <div class="sidebar-module">
        <h4>Archives</h4>
        <ol class="list-unstyled">
            @foreach($archives as $archive)
                <li><a href="{{ url('/') }}?month={{ $archive->month }}&year={{ $archive->year }}">{{ $archive->month }} {{ $archive->year }} ({{ $archive->published }})</a></li>
            @endforeach
        </ol>
    </div>
    
</div>
<!-- /.blog-sidebar -->