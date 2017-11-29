@extends('templates.masteradmin')
@section('content')
<div class="container">
	<td><a href="{{ url('input_dosen') }}" class="btn btn-warning">Create</a></td>
	<br>
	<table class="table table-bordered">
		<thead>
			<tr>
				<th style="text-align: center;">NIK</th>
				<th style="text-align: center;">Nama</th>
				<th colspan="2" style="text-align: center;">Action</th>
			</tr>
		</thead>
		<tbody>
			@if($dosens->count()>0)
			@foreach($dosens as $post)
			<tr>
				<td style="text-align: center;">{{ $post['nik'] }}</td>
				<td style="text-align: center;">{{ $post['nama'] }}</td>
				<td style="text-align: center;"><a href="#" class="btn btn-warning">Edit</a></td>
				<td style="text-align: center;"><a href="#" class="btn btn-danger">Delete</a></td>
			</tr>
			@endforeach
			@endif
		</tbody>
	</table>
</div>
@endsection