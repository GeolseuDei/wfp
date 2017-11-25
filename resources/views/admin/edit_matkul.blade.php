@extends('templates.masteradmin')
@section('content')
<div class="x_content">
	<h3>Daftar Mata Kuliah </h3>
	<table id="datatable-responsive" class="table table-striped table-bordered" width="100%">
		<thead>
			<tr>
				<th style="text-align: center;">Kode Matkul</th>
				<th style="text-align: center;">Nama Matkul</th>
				<th style="text-align: center;">SKS</th>
				<th style="text-align: center;">JURUSAN</th>
				<th style="text-align: center;">STATUS</th>
				<th style="text-align: center;">SEMESTER</th>
				<th style="text-align: center;">Edit</th>
				<th style="text-align: center;">Delete</th>
			</tr>
		</thead>
		<tbody>
			@if($matkuls->count()>0)
			@foreach($matkuls as $post)
			<tr>
				<td>{{ $post['kode'] }}</td>
				<td>{{ $post['nama'] }}</td>
				<td>{{ $post['sks'] }}</td>
				<td>{{ $post['jurusan'] }}</td>
				<td>{{ $post['status'] }}</td>
				<td>{{ $post['semester'] }}</td>
				<td><a href="{{action('MatkulController@edit', $post['id'])}}" class="btn btn-warning">Edit</a></td>
				<td>
					<button class="btn btn-danger" type="submit" confirm="Delete Data?">Delete</button>
				</td>
			</tr>
			@endforeach
			@endif
		</tbody>
	</table>
</div>
@endsection