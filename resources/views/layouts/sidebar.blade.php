<section class="sidebar">
      <!-- Sidebar user panel -->
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">

        

        <li class="menu-sidebar"><a href="{{route('hamster.index')}}"><i class="glyphicon glyphicon-tasks" style="font-size:15px"></i>
          </span> DATA HAMSTER</span></a></li>

        @if(\Auth::user()->role == 1)

        <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Master Data</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          
        </li>

        
        @endif

        @if((\Auth::user()->role == 2) || (\Auth::user()->role == 3))
        @endif
        
        <li class="menu-sidebar"><a href="{{ route('hamstermasuk.index') }}"><span class="glyphicon glyphicon-log-out"></span> HAMSTER MASUK</span></a></li>


        <li class="nav-item dropdown">
          <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
              {{ Auth::user()->name }} <span class="caret"></span>
          </a>

          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="{{ route('logout') }}"
                 onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();">
                  {{ __('Logout') }}
              </a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
              </form>
          </div>
      </li>


      </ul>
    </section>