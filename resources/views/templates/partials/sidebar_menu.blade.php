<!-- menu profile quick info -->
<div class="clearfix"></div>

<!-- menu profile quick info -->
<div class="profile clearfix">
  <div class="profile_pic">
    <img src="{{ asset('admin_file/images/img.jpg') }}" alt="..." class="img-circle profile_img">
  </div>
  <div class="profile_info">
    <span>Welcome,</span>

    <h2>{{ Auth::user()->name }}</h2>
  </div>
</div>
<!-- /menu profile quick info -->

<br/>
<!-- sidebar menu -->
<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
  <div class="menu_section">
    <h3>Menu</h3>
    <ul class="nav side-menu">
      <li><a href="{{url("admin_page")}}"><i class="fa fa-home"></i> Dashboard </a></li>
      <li><a href="{{url("master_dosen")}}"><i class="fa fa-user-md"></i>  Master Dosen </a></li>
      <li><a href="{{url("master_mahasiswa")}}"><i class="fa fa-user"></i>  Master Mahasiswa </a></li>
      <li><a><i class="fa fa-calendar"></i> Set Tanggal FPP <span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          <li><a href="{{url("fpp1")}}">Set Tanggal FPP 1</a></li>
          <li><a href="{{url("fpp2")}}">Set Tanggal FPP 2</a></li>
          <li><a href="{{url("kasus_khusus")}}">Set Tanggal Kasus Khusus</a></li>
        </ul>
      </li>
      <li><a><i class="fa fa-edit"></i> Mata Kuliah <span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          <li><a href="{{url("input_matkul")}}">Input Data Mata Kuliah</a></li>
          <li><a href="{{url("list_matkul")}}">Ubah Data Mata Kuliah</a></li>
        </ul>
      </li>
      <li><a href="{{url("master_kelas")}}"><i class="fa fa-edit"></i>  Master Kelas </a></li>
    </ul>
  </div>
</div>
  <!-- /sidebar menu -->