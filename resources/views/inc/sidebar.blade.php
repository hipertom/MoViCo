<ul class="sidebar-menu">

  <p class="centered"><a href="profile.html"><img src="{{asset('images/avatars/man-2.png')}}" class="img-circle" width="60"></a></p>
  <h5 class="centered">Account Name</h5>

  <li class="">
      <a class="{{Request::is('/') || Request::is('home') ? "active" : ""}}" href="/home">
          <i class="fa fa-dashboard"></i>
          <span>Dashboard</span>
      </a>
  </li>

  <li class="">
      <a class="{{Request::is('about') ? "active" : ""}}" href="/about">
          <i class="fa fa-dashboard"></i>
          <span>About</span>
      </a>
  </li>

  <li class="">
      <a class="{{Request::is('projects') ? "active" : ""}}" href="/projects">
          <i class="fa fa-dashboard"></i>
          <span>Projects</span>
      </a>
  </li>

  <li class="">
      <a class="{{Request::is('contact') ? "active" : ""}}" href="/contact">
          <i class="fa fa-dashboard"></i>
          <span>Contact</span>
      </a>
  </li>

  <li class="">
      <a class="{{Request::is('projectsJSON') ? "active" : ""}}" href="/projectsJSON">
          <i class="fa fa-dashboard"></i>
          <span>Project JSON</span>
      </a>
  </li>



  </ul>
