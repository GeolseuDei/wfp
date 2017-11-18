<!-- top tiles -->

@extends('templates.masteradmin')
@section('content')


<h3>Tanggal Perwalian</h3>
<div class="row" style="margin-top: 2%; ">
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
        @if($fpp1->count()>0)
        @foreach($fpp1 as $post)
        
        <h4>Tanggal Mulai : {{$post["tgl_mulai"]}}</h4>
        <h4>Tanggal Selesai : {{$post["tgl_selesai"]}}</h4> 
        @endforeach
        @else
        <h4>Tanggal Mulai :</h4>
        <h4>Tanggal Selesai :</h4>
        @endif

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
        @if($fpp2->count()>0)
        @foreach($fpp2 as $post)
        
        <h4>Tanggal Mulai : {{$post["tgl_mulai"]}}</h4>
        <h4>Tanggal Selesai : {{$post["tgl_selesai"]}}</h4> 
        @endforeach
        @else
        <h4>Tanggal Mulai :</h4>
        <h4>Tanggal Selesai :</h4>
        @endif
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
        @if($fpp3->count()>0)
        @foreach($fpp3 as $post)
        
        <h4>Tanggal Mulai : {{$post["tgl_mulai"]}}</h4>
        <h4>Tanggal Selesai : {{$post["tgl_selesai"]}}</h4> 
        @endforeach
        @else
        <h4>Tanggal Mulai :</h4>
        <h4>Tanggal Selesai :</h4>
        @endif
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
        <th style="text-align: center;">Kode Matkul</th>
        <th style="text-align: center;">Nama Matkul</th>
        <th style="text-align: center;">Hari</th>
        <th style="text-align: center;">Jam</th>
        <th style="text-align: center;">SKS</th>
        <th style="text-align: center;">KP</th>
        <th style="text-align: center;">Dosen Pengajar</th>
        <th style="text-align: center;">Kapasitas</th>
        <th style="text-align: center;">Ruangan</th>
        <th style="text-align: center;">Action</th>
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
        <td><button id="show" name="show" class="btn btn-primary" style="width: 100%;" data-toggle="modal" data-target="#myModal">Show</button></td>
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
        <td><button id="show" name="show" class="btn btn-primary" style="width: 100%;" data-toggle="modal" data-target="#myModal">Show</button></td>
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
        <td><button id="show" name="show" class="btn btn-primary" style="width: 100%;" data-toggle="modal" data-target="#myModal">Show</button></td>
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
        <td><button id="show" name="show" class="btn btn-primary" style="width: 100%;" data-toggle="modal" data-target="#myModal">Show</button></td>
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
        <td><button id="show" name="show" class="btn btn-primary" style="width: 100%;" data-toggle="modal" data-target="#myModal">Show</button></td>
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
        <td></td>
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
        <td></td>
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
        <td></td>
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
        <td></td>
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
        <td></td>
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
        <td></td>
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
        <td></td>
      </tr>
    </tbody>
  </table>
</div>

<!-- /top tiles -->

<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Detail Mata Kuliah</h4>
      </div>
      <div class="modal-body">
        <p>This is a large modal.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
</div>
@endsection