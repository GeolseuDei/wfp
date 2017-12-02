@extends('templates.masteradmin')
@section('content')
<div class="container">
	<a href="{{ url('input_mhs') }}" class="btn btn-warning">Create</a>
	<br><br><br>
	<table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
		<thead>
			<tr>
				<th style="text-align: center;">NRP</th>
				<th style="text-align: center;">Nama</th>
				<th style="text-align: center;">IPK</th>
				<th style="text-align: center;">Asdos</th>
				<th style="text-align: center;">Angkatan</th>
				<th style="text-align: center;">Edit</th>
				<th style="text-align: center;">Delete</th>
			</tr>
		</thead>
		<tbody>
			@if($mhs->count()>0)
			@foreach($mhs as $post)
			<tr>
				<td style="text-align: center;">{{ $post['nrp'] }}</td>
				<td style="text-align: center;">{{ $post['nama'] }}</td>
				<td style="text-align: center;">{{ $post['ipk'] }}</td>
				@if($post['asdos'] == 1)
				<td style="text-align: center;">Ya</td>
				@else
				<td style="text-align: center;">Tidak</td>
				@endif
				<td style="text-align: center;">{{ $post['angkatan'] }}</td>
				<td style="text-align: center;"><a href="{{ action('MasterMahasiswaController@edit', $post->id) }}" class="btn btn-warning">Edit</a></td>
				<td style="text-align: center;"><form action="{{action('MasterMahasiswaController@destroy', $post->id)}}" method="post">
					{{csrf_field()}}
					<input name="_method" type="hidden" value="DELETE">
					<button class="btn btn-danger" type="submit" confirm="Delete Data?">Delete</button>
				</form>
			</td>
		</tr>
		@endforeach
		@endif
	</tbody>
</table>
</div>
@endsection