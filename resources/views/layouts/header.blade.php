<!-- Logo -->
<?php
  // $dt = \App\User::where('id',\Auth::user()->id)->first();
?>
<a></a>
<!-- Header Navbar: style can be found in header.less -->
<nav class="navbar navbar-static-top">
  <!-- Sidebar toggle button-->
  

  <div class="navbar-custom-menu">
    <ul class="nav navbar-nav">
      <!-- Messages: style can be found in dropdown.less-->
      <!-- Tasks: style can be found in dropdown.less -->
      
      <!-- User Account: style can be found in dropdown.less -->

      <li class="user-header">
            <img src="{{ ('hamster3.jpg ') }}">

      <li class="user-header">
            <img src="{{ ('hamster1.jpg ') }}">

      <li class="user-header">
            <img src="{{ ('hamster4.jpg ') }}">

      <li class="user-header">
            <img src="{{ ('hamster5.jpg ') }}">
            
      <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning"></span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">Product Hamster</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  
                </ul>
              </li>
              <li class="footer"><a href="{{ route('hamster.index') }}">View all</a></li>
            </ul>
          </li>
      <li class="nav-item dropdown">
          <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
             <span class="caret"></span>
          </a>
      
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="{{ route('logout') }}"
                 onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();">LOGOUT
              </a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
              </form>
          </div>
      </li>
      
      
      
    </ul>
  </div>

</nav>