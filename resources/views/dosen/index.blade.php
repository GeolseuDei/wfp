@extends('templates.masterdosen')
@section('content')

<div class="x_content">
  <h3>Jadwal Mengajar Kelas</h3>
  <table id="b" class="table table-striped table-bordered dataTable">
    <thead>
      <tr>
        <th style="text-align: center;">Mata Kuliah</th>
        <th style="text-align: center;">KP</th>
        <th style="text-align: center;">Jam</th>
        <th style="text-align: center;">Ruang</th>
      </tr>
    </thead>
    <tbody>
      @foreach($dosens as $post)
      <tr>
        <th style="text-align: center;">{{$post->nama_matkul}}</th>
        <th style="text-align: center;">{{$post->kp}}</th>
        <th style="text-align: center;">{{$post->jam_masuk .' - '. $post->jam_keluar}}</th>
        <th style="text-align: center;">{{$post->ruang}}</th>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

@endsection