<div class="slim-header with-sidebar">
    <div class="container-fluid">
        <div class="slim-header-left">
            <h2 class="slim-logo"><a href="{{ url('/') }}">PerPim<span>.</span></a></h2>
            {{-- <img class="slim-logo" style="height:1em; width:auto; margin-left:0.2em; margin-right:50px;" src="{{asset('assets/images/logo-app.png')}}" alt="logo"> --}}
            <a href="#" id="slimSidebarMenu" class="slim-sidebar-menu"><span></span></a>
            {{-- <div class="search-box">
                <input type="text" class="form-control" placeholder="Search">
                <button class="btn btn-primary"><i class="fa fa-search"></i></button>
            </div> --}}
        </div><!-- slim-header-left -->
      <div class="slim-header-right">
        {{-- <div class="dropdown dropdown-a" data-toggle="tooltip" title="Activity Logs">
          <a href="" class="header-notification" data-toggle="dropdown">
            <i class="icon ion-ios-bolt-outline"></i>
          </a>
          <div class="dropdown-menu">
            <div class="dropdown-menu-header">
              <h6 class="dropdown-menu-title">Activity Logs</h6>
              <div>
                <a href="">Filter List</a>
                <a href="">Settings</a>
              </div>
            </div><!-- dropdown-menu-header -->
            <div class="dropdown-activity-list">
              <div class="activity-label">Today, December 13, 2017</div>
              <div class="activity-item">
                <div class="row no-gutters">
                  <div class="col-2 tx-right">10:15am</div>
                  <div class="col-2 tx-center"><span class="square-10 bg-success"></span></div>
                  <div class="col-8">Purchased christmas sale cloud storage</div>
                </div><!-- row -->
              </div><!-- activity-item -->
              <div class="activity-item">
                <div class="row no-gutters">
                  <div class="col-2 tx-right">9:48am</div>
                  <div class="col-2 tx-center"><span class="square-10 bg-danger"></span></div>
                  <div class="col-8">Login failure</div>
                </div><!-- row -->
              </div><!-- activity-item -->
              <div class="activity-item">
                <div class="row no-gutters">
                  <div class="col-2 tx-right">7:29am</div>
                  <div class="col-2 tx-center"><span class="square-10 bg-warning"></span></div>
                  <div class="col-8">(D:) Storage almost full</div>
                </div><!-- row -->
              </div><!-- activity-item -->
              <div class="activity-item">
                <div class="row no-gutters">
                  <div class="col-2 tx-right">3:21am</div>
                  <div class="col-2 tx-center"><span class="square-10 bg-success"></span></div>
                  <div class="col-8">1 item sold <strong>Christmas bundle</strong></div>
                </div><!-- row -->
              </div><!-- activity-item -->
              <div class="activity-label">Yesterday, December 12, 2017</div>
              <div class="activity-item">
                <div class="row no-gutters">
                  <div class="col-2 tx-right">6:57am</div>
                  <div class="col-2 tx-center"><span class="square-10 bg-success"></span></div>
                  <div class="col-8">Earn new badge <strong>Elite Author</strong></div>
                </div><!-- row -->
              </div><!-- activity-item -->
            </div><!-- dropdown-activity-list -->
            <div class="dropdown-list-footer">
              <a href="page-activity.html"><i class="fa fa-angle-down"></i> Show All Activities</a>
            </div>
          </div><!-- dropdown-menu-right -->
        </div><!-- dropdown --> --}}
        {{-- <div class="dropdown dropdown-b" data-toggle="tooltip" title="Notifications">
          <a href="" class="header-notification" data-toggle="dropdown">
            <i class="icon ion-ios-bell-outline"></i>
            <span class="indicator"></span>
          </a>
          <div class="dropdown-menu">
            <div class="dropdown-menu-header">
              <h6 class="dropdown-menu-title">Notifications</h6>
              <div>
                <a href="">Mark All as Read</a>
                <a href="">Settings</a>
              </div>
            </div><!-- dropdown-menu-header -->
            <div class="dropdown-list">
              <div class="dropdown-list-footer">
                <a href="page-notifications.html"><i class="fa fa-angle-down"></i> Show All Notifications</a>
              </div>
            </div><!-- dropdown-list -->
          </div><!-- dropdown-menu-right -->
        </div><!-- dropdown --> --}}
        <div class="dropdown dropdown-c">
          <a href="#" class="logged-user" data-toggle="dropdown">
            <img src="{{asset('assets/images/man.png')}}" alt="admin">
        
            <i class="fa fa-angle-down"></i>
          </a>       
          <div class="dropdown-menu dropdown-menu-right">
          <nav class="nav">
          <a class="dropdown-item" href="#"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="#" method="POST" class="d-none">
                                        @csrf
                                    </form>
            </nav>
          </div><!-- dropdown-menu -->
        </div><!-- dropdown -->
      </div><!-- header-right -->
    </div><!-- container-fluid -->
</div><!-- slim-header -->