@extends('templates.masteradmin')
@section('content')
<div class="container">
	<td><a href="{{ url('input_dosen') }}" class="btn btn-warning">Create</a></td>
	<br><br><br>
	<table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
		<thead>
			<tr>
				<th style="text-align: center;">NIK</th>
				<th style="text-align: center;">Nama</th>
				<th style="text-align: center;">Edit</th>
				<th style="text-align: center;">Delete</th>
			</tr>
		</thead>
		<tbody>
			@if($dosens->count()>0)
			@foreach($dosens as $post)
			<tr>
				<td style="text-align: center;">{{ $post['nik'] }}</td>
				<td style="text-align: center;">{{ $post['nama'] }}</td>
				<td style="text-align: center;"><a href="{{ action('MasterDosenController@edit', $post->id) }}" class="btn btn-warning">Edit</a></td>
				<td style="text-align: center;"><form action="{{action('MasterDosenController@destroy', $post->id)}}" method="post">
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