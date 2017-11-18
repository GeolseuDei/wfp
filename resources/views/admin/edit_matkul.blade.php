@extends('templates.masteradmin')
@section('content')
<div class="x_content">
	<h3>Daftar Mata Kuliah </h3>
	<table id="datatable-responsive" class="table table-striped table-bordered" width="100%">
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
				<th style="text-align: center;">Edit</th>
				<th style="text-align: center;">Delete</th>
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
				<td><a href="#" class="btn btn-warning">Edit</a></td>
				<td>
					<button class="btn btn-danger" type="submit" confirm="Delete Data?">Delete</button>
				</td>
			</tr>
		</tbody>
	</table>
</div>
@endsection