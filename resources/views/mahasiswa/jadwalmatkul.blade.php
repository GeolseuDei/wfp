@extends('templates.mastermhs')
@section('content')
<div class="container">
	<div class="panel panel-primary" style="margin-top: 6%">
		<div class="panel-heading">
			<h3 class="panel-title">Jadwal Mata Kuliah
				<a class="anchorjs-link" href="#panel-title">
					<span class="anchorjs-icon"></span>
				</a>
			</h3>
		</div>
		<div class="panel-body">
			<table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
				<thead>
					<tr>
						<th style="text-align: center;">Kode Mata Kuliah</th>
						<th style="text-align: center;">Mata Kuliah</th>
						<th style="text-align: center;">SKS</th>
						<th style="text-align: center;">Hari</th>
						<th style="text-align: center;">Jam</th>
						<th style="text-align: center;">KP</th>
						<th style="text-align: center;">Ruang</th>
						<th style="text-align: center;">Kapasitas</th>
						<th style="text-align: center;">Sisa Kapasitas</th>
						<th style="text-align: center;">Dosen</th>
					</tr>
				</thead>
				<tbody>
					@foreach($jadwalmatkul as $post)
					<tr>
						<th style="text-align: center;">{{$post->kode}}</th>
						<th style="text-align: center;">{{$post->nama}}</th>
						<th style="text-align: center;">{{$post->sks}}</th>
						<th style="text-align: center;">{{$post->hari}}</th>
						<th style="text-align: center;">{{$post->jam_masuk .' - '. $post->jam_keluar}}</th>
						<th style="text-align: center;">{{$post->kp}}</th>
						<th style="text-align: center;">{{$post->ruang}}</th>
						<th style="text-align: center;">{{$post->kapasitas}}</th>
						<th style="text-align: center;">{{$post->kapasitas - $post->jml_mhs}}</th>
						<th style="text-align: center;">{{$post->nama_dosen}}</th>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>
@endsection