<li>
          <h5 class="page-title hidden-menubar-top hidden-float">Dashboard {{ Auth::user()->name }}</h5>
        </li>
      </ul>

      <!-- <ul class="nav navbar-toolbar navbar-toolbar-right navbar-right">
        <li class="nav-item dropdown hidden-float">
          <a href="javascript:void(0)" data-toggle="collapse" data-target="#navbar-search" aria-expanded="false">
            <i class="zmdi zmdi-hc-lg zmdi-search"></i>
          </a>
        </li>

        <li class="dropdown">
          <a href="javascript:void(0)" class="side-panel-toggle" data-toggle="class" data-target="#side-panel" data-class="open" role="button"><i class="zmdi zmdi-hc-lg zmdi-apps"></i></a>
        </li>
      </ul> -->
    </div>
  </div><!-- navbar-container -->
</nav>
<!--========== END app navbar -->

<!-- APP ASIDE ==========-->
<!-- APP MAIN ==========--><aside id="menubar" class="menubar light">
  <div class="app-user">
    <div class="media">
      <div class="media-left">
        <div class="avatar avatar-md avatar-circle">
          <a href="javascript:void(0)">
                                                </a>
        </div><!-- .avatar -->
      </div>
      <div class="media-body">
        <div class="foldable">
          <h5><a href="javascript:void(0)" class="username">{{ Auth::user()->fname }}</a></h5>
          <ul>
            <li class="dropdown">
              <a href="javascript:void(0)" class="dropdown-toggle usertitle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <small>Profile</small>
                <span class="caret"></span>
              </a>

               <ul class="dropdown-menu animated flipInY">
                <li>
                  <a class="text-color" href="{{ route('user.dashboard') }}">
                    <span class="m-r-xs"><i class="fa fa-home"></i></span>
                    <span>Home</span>
                  </a>
                </li>
                
                <li role="separator" class="divider"></li>
                <li>
                  <a class="text-color" href="{{ route('logout') }}"
                      onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();">
                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                      </form>

                    <span class="m-r-xs"><i class="fa fa-power-off"></i></span>
                    <span>Logout</span>
                  </a>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </div><!-- .media-body -->
    </div><!-- .media -->
  </div><!-- .app-user -->

  <div class="menubar-scroll">
    <div class="menubar-scroll-inner">
      <ul class="app-menu">
        
        <li>
          <a href="{{ route('user.dashboard') }} ">
            <i class="menu-icon fa fa-home"></i>
            <span class="menu-text">Home</span>
          </a>
        </li>

        <li>
          <a href="# ">
            <i class="menu-icon fa fa-home"></i>
            <span class="menu-text">My Profile</span>
          </a>
        </li>

        <li>
            <a href="#">
              <i class="menu-icon glyphicon glyphicon-list-alt"></i>
              <span class="menu-text">Bio-data Form</span>
            </a>
          </li>

          <li>
            <a href="#">
              <i class="menu-icon glyphicon glyphicon-list-alt"></i>
              <span class="menu-text">Guarantor Form</span>
            </a>
          </li>

          <li>
            <a href="#">
              <i class="menu-icon glyphicon glyphicon-list-alt"></i>
              <span class="menu-text">Course Registration</span>
            </a>
          </li>
          
        <li>
          <a href="# ">
            <i class="menu-icon fa fa-home"></i>
            <span class="menu-text">Payment History</span>
          </a>
        </li>

        <li>
          <a href="#">
            <i class="menu-icon fa fa-home"></i>
            <span class="menu-text">Fees Structure</span>
          </a>
        </li>

        <li>
          <a class="text-color" href="{{ route('logout') }}"
              onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
              </form>

            <span class="m-r-xs"><i class="fa fa-power-off"></i></span>
            <span>Logout</span>
          </a>
        </li>
      </ul><!-- .app-menu -->
    </div><!-- .menubar-scroll-inner -->
  </div><!-- .menubar-scroll -->
</aside><!--========== END app aside -->

<!-- navbar search -->
<div id="navbar-search" class="navbar-search collapse">
  <div class="navbar-search-inner">
    <form action="#">
      <span class="search-icon"><i class="fa fa-search"></i></span>
      <input class="search-field" type="search" placeholder="search..."/>
    </form>
    <button type="button" class="search-close" data-toggle="collapse" data-target="#navbar-search" aria-expanded="false">
      <i class="fa fa-close"></i>
    </button>
  </div>
  <div class="navbar-search-backdrop" data-toggle="collapse" data-target="#navbar-search" aria-expanded="false"></div>
</div><!-- .navbar-search -->
