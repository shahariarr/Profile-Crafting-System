<nav class="navbar">
    <ul class="navbar-list">
        <li class="navbar-item">
            <a href="{{ url('/about') }}" class="navbar-link {{Request::is('about') ? 'active' : ''}}" data-nav-link>About</a>
        </li>
        <li class="navbar-item">
            <a href="{{ url('/resume') }}" class="navbar-link {{Request::is('resume') ? 'active' : ''}}" data-nav-link>Resume</a>
        </li>
        <li class="navbar-item">
            <a href="{{ url('/portfolio') }}" class="navbar-link {{Request::is('portfolio') ? 'active' : ''}}" data-nav-link>Portfolio</a>
        </li>
        <li class="navbar-item">
            <a href="{{ url('/blog') }}" class="navbar-link {{Request::is('blog') ? 'active' : ''}}" data-nav-link>Blog</a>
        </li>
        <li class="navbar-item">
            <a href="{{url("/contact")}}" class="navbar-link {{Request::is('contact') ? 'active' : ''}}" data-nav-link>Contact</a>
        </li>
    </ul>
</nav>
