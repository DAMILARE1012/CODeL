<aside id="menubar" class="menubar light">
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
          <h5><a href="javascript:void(0)" class="username">admin</a></h5>
          <ul>
            <li class="dropdown">
              <a href="javascript:void(0)" class="dropdown-toggle usertitle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <small>My Profile</small>
                <span class="caret"></span>
              </a>

              <ul class="dropdown-menu animated flipInY">
                <li>
                  <a class="text-color" href="http://localhost:8000/home">
                    <span class="m-r-xs"><i class="fa fa-home"></i></span>
                    <span>Home</span>
                  </a>
                </li>
                
                <li role="separator" class="divider"></li>
                <li>
                  <a class="text-color" href="http://localhost:8000/logout"
                      onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();">
                      <form id="logout-form" action="http://localhost:8000/logout" method="POST" style="display: none;">
                        <input type="hidden" name="_token" value="qXp1N3BrVaBeEa9DD6qvw1N4Ob8xzrrZINIGNl8t">
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
          <a href="http://localhost:8000/home">
            <i class="menu-icon fa fa-home"></i>
            <span class="menu-text">Home</span>
          </a>
        </li>

        <li>
          <a href="http://localhost:8000/student/update-profile">
            <i class="menu-icon fa fa-user"></i>
            <span class="menu-text">Update Profile</span>
          </a>
        </li>

        <li>
          <a href="http://localhost:8000/student/o-level-subjects">
            <i class="menu-icon fa fa-file-photo-o"></i>
            <span class="menu-text">Submit Result</span>
          </a>
        </li>

        <li>
          <a href="http://localhost:8000/student/upload-my-files">
            <i class="menu-icon fa fa-print"></i>
            <span class="menu-text">Upload Scanned Files</span>
          </a>
        </li>

        <li>
          <a href="http://localhost:8000/student/admission-status">
            <i class="menu-icon fa fa-edit"></i>
            <span class="menu-text">Admission Status</span>
          </a>
        </li>
                
        
        <li>
            <a href="http://localhost:8000/logout" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
              <form id="logout-form" action="http://localhost:8000/logout" method="POST" style="display: none;">
                <input type="hidden" name="_token" value="qXp1N3BrVaBeEa9DD6qvw1N4Ob8xzrrZINIGNl8t">
              </form>
              <i class="menu-icon fa fa-power-off"></i>
              <span class="menu-text">Logout</span>
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
