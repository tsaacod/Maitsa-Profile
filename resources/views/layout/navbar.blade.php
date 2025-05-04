<nav id="navmenu" class="navmenu">
  <ul>
    <li><a href="{{ route('index') }}" class="{{ request()->routeIs('index') ? 'active' : '' }}">Home</a></li>
    <li><a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'active' : '' }}">About</a></li>
    <li><a href="{{ route('resume') }}" class="{{ request()->routeIs('resume') ? 'active' : '' }}">Resume</a></li>
    <li><a href="{{ route('portofolio') }}" class="{{ request()->routeIs('portofolio') ? 'active' : '' }}">Portfolio</a></li>
  </ul>
  <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
</nav>