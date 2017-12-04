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
        <?php
        $tglmulai = explode(" ",$fpp1[0]->tgl_mulai);
        $tglselesai = explode(" ",$fpp1[0]->tgl_selesai);
        ?>
        <h4>Tanggal Mulai : {{$tglmulai[0]}}</h4>
        <h4>Tanggal Selesai : {{$tglselesai[0]}}</h4>
        @else
        <h4>Tanggal Mulai :</h4>
        <h4>Tanggal Selesai :</h4>
        @endif
        <a class="btn btn-primary" href="{{action('AdminHomeController@validasi')}}" role="button">Validasi</a>
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
       <?php
       $tglmulai = explode(" ",$fpp2[1]->tgl_mulai);
       $tglselesai = explode(" ",$fpp2[1]->tgl_selesai);
       ?>
       <h4>Tanggal Mulai : {{$tglmulai[0]}}</h4>
       <h4>Tanggal Selesai : {{$tglselesai[0]}}</h4>
       @else
       <h4>Tanggal Mulai :</h4>
       <h4>Tanggal Selesai :</h4>
       @endif
       <a class="btn btn-primary" href="{{action('AdminHomeController@validasi')}}" role="button">Validasi</a>
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
      <?php
      $tglmulai = explode(" ",$fpp3[2]->tgl_mulai);
      $tglselesai = explode(" ",$fpp3[2]->tgl_selesai);
      ?>
      <h4>Tanggal Mulai : {{$tglmulai[0]}}</h4>
      <h4>Tanggal Selesai : {{$tglselesai[0]}}</h4>
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
  <div class="panel panel-primary">
    <div class="panel-heading">
      <h3 class="panel-title">Daftar Mata Kuliah
        <a class="anchorjs-link" href="#panel-title">
          <span class="anchorjs-icon"></span>
        </a>
      </h3>
    </div>
    <div class="panel-body">
      <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
        <thead>
          <tr>
            <th style="text-align: center;">Kode Matkul</th>
            <th style="text-align: center;">Nama Matkul</th>
            <th style="text-align: center;">Jurusan</th>
            <th style="text-align: center;">Hari</th>
            <th style="text-align: center;">Jam</th>
            <th style="text-align: center;">SKS</th>
            <th style="text-align: center;">KP</th>
            <th style="text-align: center;">Dosen Pengajar</th>
            <th style="text-align: center;">Kapasitas</th>
            <th style="text-align: center;">Sisa Kapasitas</th>
        <th style="text-align: center;">Ruangan</th><!-- 
        <th style="text-align: center;">Action</th> -->
      </tr>
    </thead>
    <tbody>
      @foreach($matkuls as $post)
      <tr>
        <td>{{$post->kode}}</td>
        <td>{{$post->nama_matkul}}</td>
        <td>{{$post->nama_jurusan}}</td>
        <td>{{$post->hari}}</td>
        <td>{{$post->jam_masuk .' - '. $post->jam_keluar}}</td>
        <td>{{$post->sks}}</td>
        <td>{{$post->kp}}</td>
        <td>{{$post->nama_dosen}}</td>
        <td>{{$post->kapasitas}}</td>
        <td>{{$post->kapasitas - $post->jml_mhs}}</td>
        <td>{{$post->ruang}}</td><!-- 
        <td><button id="show" name="show" class="btn btn-primary" style="width: 100%;" data-toggle="modal" data-target="#myModal">Show</button></td> -->
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
</div>
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