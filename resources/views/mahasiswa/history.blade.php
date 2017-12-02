@extends('templates.mastermhs')
@section('content')
<div class="container">
	<div class="panel panel-primary" style="margin-top: 6%">
		<div class="panel-heading">
			<h3 class="panel-title">History Perwalian
				<a class="anchorjs-link" href="#panel-title">
					<span class="anchorjs-icon"></span>
				</a>
			</h3>
		</div>
		<div class="panel-body">
			<hr>
			@if($matkul_diambils->count()>0)
			<table class="table table-bordered">
				<thead>
					<tr>
						<th style="text-align: center;">Kode Mata Kuliah</th>
						<th style="text-align: center;">Mata Kuliah</th>
						<th style="text-align: center;">KP</th>
						<th style="text-align: center;">SKS</th>
						<th style="text-align: center;">Status</th>
						<th style="text-align: center;">Action</th>
					</tr>
				</thead>
				<tbody>
					@foreach($matkul_diambils as $post)
					<tr>
						<td style="text-align: center;">{{$post->kode}}</td>
						<td style="text-align: center;">{{$post->nama}}</td>
						<td style="text-align: center;">{{$post->kp}}</td>
						<td style="text-align: center;">{{$post->sks}}</td>
						@if($post->status==0)
						<td style="text-align: center;">Masih di proses</td>
						@elseif($post->status==1)
						<td style="text-align: center;">Diterima</td>
						@elseif($post->status==2)
						<td style="text-align: center;">Ditolak</td>
						@endif
						<td style="text-align: center;">
							<form action="{{action('HistoryController@destroy', $post->idmatkuldiambil)}}" method="post">
							{{csrf_field()}}
							<input name="_method" type="hidden" value="DELETE">
							<button class="btn btn-danger" type="submit" confirm="Delete Data?">Delete</button>
						</form>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
		@else
		<h2 style="text-align: center;">Tidak ada input</h2>
		@endif
		<hr>
	</div>
</div>

</div>
@endsection