<!-- top tiles -->

@extends('templates.masteradmin')
@section('content')

  <h3>Tanggal Perwalian</h3>
  <div class="row" style="margin-top: 2%; margin-right: 2%;">
    <!-- 1 -->
    <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading">
          <h3 class="panel-title">FPP 1
            <a class="anchorjs-link" href="#panel-title">
              <span class="anchorjs-icon"></span>
            </a>
          </h3>
        </div>
        <div class="panel-body"> 
          <h4>Tanggal Mulai : dd:MM:YY h:m:s</h4>
          <h4>Tanggal Selesai : dd:MM:YY h:m:s</h4> 
        </div>
      </div>
    </div>
    <!-- 2 -->
    <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading">
          <h3 class="panel-title">FPP 2
            <a class="anchorjs-link" href="#panel-title">
              <span class="anchorjs-icon"></span>
            </a>
          </h3>
        </div>
        <div class="panel-body">
          <h4>Tanggal Mulai : dd:MM:YY h:m:s</h4>
          <h4>Tanggal Selesai : dd:MM:YY h:m:s</h4> 
        </div>
      </div>
    </div>
    <!-- 3 -->
    <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading">
          <h3 class="panel-title">Kasus Khusus
            <a class="anchorjs-link" href="#panel-title">
              <span class="anchorjs-icon"></span>
            </a>
          </h3>
        </div>
        <div class="panel-body">
          <h4>Tanggal Mulai : dd:MM:YY h:m:s</h4>
          <h4>Tanggal Selesai : dd:MM:YY h:m:s</h4> 
        </div>
      </div>
    </div>
  </div>

  <!-- TABEL MATA KULIAH  -->
  <div class="x_content">
    <h3>Daftar Mata Kuliah </h3>
    <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
      <thead>
        <tr>
          <th>Kode Matkul</th>
          <th>Nama Matkul</th>
          <th>Hari</th>
          <th>Jam</th>
          <th>SKS</th>
          <th>KP</th>
          <th>Dosen Pengajar</th>
          <th>Kapasitas</th>
          <th>Ruangan</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>160714044</td>
          <td>algoritma pemrograman</td>
          <td>Senin</td>
          <td>08.00 - 09.00</td>
          <td>3</td>
          <td>A</td>
          <td>Siprianus Harry Hoedijono</td>
          <td>30</td>
          <td>TC 4.</td>
        </tr>
        <tr>
          <td>160A4021</td>
          <td>pemrograman web</td>
          <td>Rabu</td>
          <td>08.00 - 09.00</td>
          <td>3</td>
          <td>A</td>
          <td>Siprianus Harry Hoedijono</td>
          <td>30</td>
          <td>TC 4.</td>
        </tr>
        <tr>
          <td>160714044</td>
          <td>algoritma pemrograman</td>
          <td>Jumat</td>
          <td>08.00 - 09.00</td>
          <td>3</td>
          <td>A</td>
          <td>Siprianus Harry Hoedijono</td>
          <td>30</td>
          <td>TC 4.</td>
        </tr>
        <tr>
          <td>160714044</td>
          <td>algoritma pemrograman</td>
          <td>Senin</td>
          <td>08.00 - 09.00</td>
          <td>3</td>
          <td>A</td>
          <td>Siprianus Harry Hoedijono</td>
          <td>30</td>
          <td>TC 4.</td>
        </tr>
        <tr>
          <td>160714044</td>
          <td>algoritma pemrograman</td>
          <td>Senin</td>
          <td>08.00 - 09.00</td>
          <td>3</td>
          <td>A</td>
          <td>Siprianus Harry Hoedijono</td>
          <td>30</td>
          <td>TC 4.</td>
        </tr>
        <tr>
          <td>160714044</td>
          <td>algoritma pemrograman</td>
          <td>Senin</td>
          <td>08.00 - 09.00</td>
          <td>3</td>
          <td>A</td>
          <td>Siprianus Harry Hoedijono</td>
          <td>30</td>
          <td>TC 4.</td>
        </tr>
      </tbody>
    </table>
  </div>

<!-- /top tiles -->
@endsection