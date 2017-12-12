<ul class="sidebar-menu">
    
    @Auth
    <p class="centered"><a href="profile.html"><img src="{{asset('images/avatars/man-2.png')}}" class="img-circle" width="60"></a></p>
    <h5 class="centered">{{ Auth::user()->name }}</h5>
    <a class="centered" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
    @else
    <p>error: must be logged in</p>
    @endAuth

    <!-- hidden logout form -->
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        {{ csrf_field() }}
    </form>


    <li class="">
        <a class="{{Request::is('/') || Request::is('home') ? "active" : ""}}" href="/home">
            <i class="fa fa-dashboard"></i>
            <span>Dashboard</span>
        </a>
    </li>

    <li class="">
        <a class="{{Request::is('about') ? "active" : ""}}" href="/about">
            <i class="fa fa-user-circle-o"></i>
            <span>About</span>
        </a>
    </li>

    <li class="">
        <a class="{{Request::is('projects') ? "active" : ""}}" href="/projects">
            <i class="fa fa-id-card"></i>
            <span>Projects</span>
        </a>
    </li>

    <li class="">
        <a class="{{Request::is('contact') ? "active" : ""}}" href="/contact">
            <i class="fa fa-address-book"></i>
            <span>Contact</span>
        </a>
    </li>

    <li class="">
        <a class="{{Request::is('projectsJSON') ? "active" : ""}}" href="/projectsJSON">
            <i class="fa fa-file-text"></i>
            <span>Project JSON</span>
        </a>
    </li>
</ul>
