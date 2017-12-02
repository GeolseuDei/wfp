@extends('templates.masteradmin')
@section('content')
<div class="container">
	<a href="{{ url('input_kelas') }}" class="btn btn-warning">Create</a>
	<br><br><br>
	<table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
		<thead>
			<tr>
				<th style="text-align: center;">Mata Kuliah</th>
				<th style="text-align: center;">Dosen</th>
				<th style="text-align: center;">Hari</th>
				<th style="text-align: center;">Jam</th>
				<th style="text-align: center;">KP</th>
				<th style="text-align: center;">Ruang</th>
				<th style="text-align: center;">Kapasitas</th>
				<th style="text-align: center;">Edit</th>
				<th style="text-align: center;">Delete</th>
			</tr>
		</thead>
		<tbody>
			@foreach($kelas as $post)
			<tr>
				<td>{{ $post->nama_matkul }}</td>
				<td>{{ $post->nama_dosen }}</td>
				<td>{{ $post->hari }}</td>
				<td>{{ $post->jam_masuk . ' - ' . $post->jam_keluar }}</td>
				<td>{{ $post->kp }}</td>
				<td>{{ $post->ruang }}</td>
				<td>{{ $post->kapasitas }}</td>
				<td style="text-align: center;"><a href="{{ action('MasterKelasController@edit', $post->id) }}" class="btn btn-warning">Edit</a></td>
				<td style="text-align: center;"><form action="{{action('MasterKelasController@destroy', $post->id)}}" method="post">
					{{csrf_field()}}
					<input name="_method" type="hidden" value="DELETE">
					<button class="btn btn-danger" type="submit" confirm="Delete Data?">Delete</button>
				</form>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
@endsection