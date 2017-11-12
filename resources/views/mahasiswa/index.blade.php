
@extends('mastermhs')
@section('content')
<div class="container">
	<h2>INI COBA TABEL</h2>
	<div class="row">
	<div class="col-sm-8">
	<table class="table" style="width: 100%">
		<thead>
			<tr>
				<th colspan="2" style="text-align: center;">Profil Mahasiswa</th>
				<th></th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>Nama</td>
				<td>Tommy Rachmadiono</td>
			</tr>
			<tr>
				<td>NRP</td>
				<td>160714044</td>
			</tr>
			<tr>
				<td>SKS Max</td>
				<td>24</td>
			</tr>
			<tr>
				<td>IPS</td>
				<td>3.5</td>
			</tr>
			<tr>
				<td>IPK</td>
				<td>3.2</td>
			</tr>
		</tbody>
	</table>

	<table class="table" style="width: 100%">
		<thead>
			<tr>
				<th colspan="2" style="text-align: center;">Status Perkuliahan</th>
				<th></th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>Jurusan</td>
				<td>Sistem Informasi</td>
			</tr>
			<tr>
				<td>Angkatan</td>
				<td>2014</td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td>asdasd</td>
			</tr>
			<tr>
				<td>Nomor Telpon</td>
				<td>0810810810</td>
			</tr>
		</tbody>
	</table>
</div>

<div class="col-sm-4">
	<h3>Menu Perwalian</h3>
<ul>
	<li><a href="#">Home</li>
	<li class="active"><a href="#">Profil Mahasiswa</li>
	<li><a href="#">Daftar Kelas</li>
</ul>
</div>
</div>
</div>
@endsection