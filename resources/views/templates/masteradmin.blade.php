<!DOCTYPE html>
<html lang="en">
  @include('templates.partials.head')

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="admin_page" class="site_title"><i class="fa fa-paw"></i> <span>Admin Page</span></a>
            </div>

            <!-- Sidebar Menu -->
            @include('templates.partials.sidebar_menu')

          </div>
        </div>

        <!-- Top Menu -->
        @include('templates.partials.top_nav')

        <!-- page content -->
        <div class="right_col" role="main">
            @yield('content')
        </div>
        <!-- /page content -->
        
        <!-- FOOTER -->
        @include('templates.partials.footer') 
      </div>
    </div>

    <!-- SCRIPT -->
    @include('templates.partials.scripts')
    
  </body>
</html>
