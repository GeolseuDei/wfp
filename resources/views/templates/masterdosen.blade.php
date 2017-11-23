<!DOCTYPE html>
<html lang="en">
  @include('templates.partials_dosen.head')

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="admin_page" class="site_title"><i class="fa fa-paw"></i> <span>Dosen Page</span></a>
            </div>

            <!-- Sidebar Menu -->
            @include('templates.partials_dosen.sidebar_menu')

          </div>
        </div>

        <!-- Top Menu -->
        @include('templates.partials_dosen.top_nav')

        <!-- page content -->
        <div class="right_col" role="main">
            @yield('content')
        </div>
        <!-- /page content -->
        
        <!-- FOOTER -->
        @include('templates.partials_dosen.footer') 
      </div>
    </div>

    <!-- SCRIPT -->
    @include('templates.partials_dosen.scripts')
    
  </body>
</html>
<script>
  $(document).ready(function() {
    $("#a").DataTable({
      dom: 'Bfrtip',
      buttons: [
      'copy',
      'csv',
      'print'
      ]
    });
    $("#b").DataTable({
      dom: 'Bfrtip',
      buttons: [
      'copy',
      'csv',
      'print'
      ]
    });
  });
</script>