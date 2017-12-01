<!-- menu profile quick info -->
<div class="clearfix"></div>

<!-- menu profile quick info -->
<div class="profile clearfix">
  <div class="profile_pic">
    <img src="{{ asset('admin_file/images/mhs.png') }}" alt="..." class="img-circle profile_img">
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
      <li><a href="{{url('mahasiswa')}}"><i class="fa fa-home"></i> Home </a></li>
      <li><a href="{{url('profil_mahasiswa')}}"><i class="fa fa-user-md"></i> Profil Mahasiswa </a></li>
      <li><a href="{{url('jadwal_matkul')}}"><i class="fa fa-edit"></i> Jadwal Mata Kuliah </a></li>
      <li><a href="{{url('daftarkelas')}}"><i class="fa fa-keyboard-o"></i> Daftar Kelas Perwalian </a></li>
      <li><a href="{{url('history')}}"><i class="fa fa-plus"></i> History Perwalian </a></li>
    </ul>
  </div>

</div>
  <!-- /sidebar menu -->