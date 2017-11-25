@extends('templates.masteradmin')
@section('content')
<div class="container">
	<table class="table table-striped">
		<thead>
			<tr>
				<th style="text-align: center;">ID</th>
				<th style="text-align: center;">Title</th>
				<th style="text-align: center;">Post</th>
				<th colspan="2" style="text-align: center;">Action</th>
			</tr>
		</thead>
		<tbody>

			<tr>
				<td style="text-align: center;">1</td>
				<td style="text-align: center;">Coba</td>
				<td style="text-align: center;">coba 123321</td>
				<td style="text-align: center;"><a href="#" class="btn btn-warning">Edit</a></td>
				<td style="text-align: center;"><a href="#" class="btn btn-danger">Delete</a></td>
			</tr>
			
		</tbody>
	</table>
	<td><a href="#" class="btn btn-warning">Create</a></td>
        <td>
</div>
@endsection