<!DOCTYPE html>
<html lang="en">
@include('templates.partials_mhs.head')

<body class="nav-md">
	<div class="container body">
		<div class="main_container">
			<div class="col-md-3 left_col">
				<div class="left_col scroll-view">
					<div class="navbar nav_title" style="border: 0;">
						<a href="mahasiswa" class="site_title"><i class="fa fa-paw"></i> <span>Mahasiswa Page</span></a>
					</div>

					<!-- Sidebar Menu -->
					@include('templates.partials_mhs.sidebar_menu')

				</div>
			</div>

			<!-- Top Menu -->
			@include('templates.partials_mhs.top_nav')

			<!-- page content -->
			<div class="right_col" role="main">
				@yield('content')
			</div>
			<!-- /page content -->

			<!-- FOOTER -->
			@include('templates.partials_mhs.footer') 
		</div>
	</div>

	<!-- SCRIPT -->
	@include('templates.partials_mhs.scripts')

</body>
</html>
