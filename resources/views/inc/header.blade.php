{{--  <div class="header-sidebar">
    <div class="sidebar-toggle-box">
        <div class="fa fa-bars" data-toggle="tooltip" data-placement="right" title="Toggle navigation"></div>
    </div>
    
    <a href="{{ url('/') }}" class="logo"><b>{{ config('app.name', 'Laravel') }}</b></a>
</div>
<div class="main-header">
    <ul class="nav navbar-nav navbar-right">
        <!-- Authentication Links -->
        @guest
            <li><a href="{{ route('login') }}">Login</a></li>
            <li><a href="{{ route('register') }}">Register</a></li>
        @else
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>
    
                <ul class="dropdown-menu">
                    <li>
                        <a href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                            Logout
                        </a>
    
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                </ul>
            </li>
        @endguest
    </ul>    
</div>  --}}





