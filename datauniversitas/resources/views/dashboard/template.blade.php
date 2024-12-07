<!DOCTYPE html>
<html lang="en">
  <!-- Mirrored from demo.dashboardpack.com/adminty-html/default/dashboard-analytics.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 04 Jan 2024 05:00:04 GMT -->
  <head>
    @include('dashboard.head')
  </head>
  <body>
    <div class="theme-loader">
      <div class="ball-scale">
        <div class="contain">
          <div class="ring">
            <div class="frame"></div>
          </div>
          <div class="ring">
            <div class="frame"></div>
          </div>
          <div class="ring">
            <div class="frame"></div>
          </div>
          <div class="ring">
            <div class="frame"></div>
          </div>
          <div class="ring">
            <div class="frame"></div>
          </div>
          <div class="ring">
            <div class="frame"></div>
          </div>
          <div class="ring">
            <div class="frame"></div>
          </div>
          <div class="ring">
            <div class="frame"></div>
          </div>
          <div class="ring">
            <div class="frame"></div>
          </div>
          <div class="ring">
            <div class="frame"></div>
          </div>
        </div>
      </div>
    </div>
    <div id="pcoded" class="pcoded">
      <div class="pcoded-overlay-box"></div>
      <div class="pcoded-container navbar-wrapper">
        {{-- header --}}
        <nav class="navbar header-navbar pcoded-header">
          <div class="navbar-wrapper">
            <div class="navbar-logo">
              <a class="mobile-menu" id="mobile-collapse" href="#!">
                <i class="feather icon-menu"></i>
              </a>
              <a href="/dashboard">
                <img class="img-fluid" src="{{ asset('own_assets/images/logo.png') }}" alt="Theme-Logo" width="150px"/>
              </a>
              <a class="mobile-options">
                <i class="feather icon-more-horizontal"></i>
              </a>
            </div>
            <div class="navbar-container">
              <ul class="nav-left">
                <li class="header-search">
                  <div class="main-search morphsearch-search">
                    <div class="input-group">
                      <span class="input-group-addon search-close">
                        <i class="feather icon-x"></i>
                      </span>
                      <input type="text" class="form-control">
                      <span class="input-group-addon search-btn">
                        <i class="feather icon-search"></i>
                      </span>
                    </div>
                  </div>
                </li>
                <li>
                  <a href="#!" onclick="javascript:toggleFullScreen()">
                    <i class="feather icon-maximize full-screen"></i>
                  </a>
                </li>
              </ul>
              <ul class="nav-right">

                <li class="user-profile header-notification">
                  <div class="dropdown-primary dropdown">
                    <div class="dropdown-toggle" data-toggle="dropdown">
                      <img src="{{ (session('user')->foto) ? asset('file_upload/user_image') . '/' . session('user')->foto : asset('own_assets/images/no_user.jpg') }}" class="img-radius" alt="User-Profile-Image">
                      <span>{{ session('user')->name }}</span>
                      <i class="feather icon-chevron-down"></i>
                    </div>
                    <ul class="show-notification profile-notification dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">

                      <li>
                        <hr>
                        <div id="logout">
                            <i class="feather icon-log-out"></i> Logout
                        </div>
                      </li>
                    </ul>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </nav>
        {{-- end header --}}






        <div class="pcoded-main-container">
          <div class="pcoded-wrapper">
            <nav class="pcoded-navbar">
                @include('dashboard.sidebar')
            </nav>

            @yield('content')

          </div>
        </div>
      </div>
    </div>


        @include('dashboard.scripts')
    </body>
  <!-- Mirrored from demo.dashboardpack.com/adminty-html/default/dashboard-analytics.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 04 Jan 2024 05:00:06 GMT -->
</html>
