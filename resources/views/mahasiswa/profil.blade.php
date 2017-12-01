@extends('templates.mastermhs')
@section('content')
<div class="container">
	<div class="panel panel-primary" style="margin-top: 6%">
		<div class="panel-heading">
			<h3 class="panel-title">Profil
				<a class="anchorjs-link" href="#panel-title">
					<span class="anchorjs-icon"></span>
				</a>
			</h3>
		</div>
		<div class="panel-body">
			@if($mahasiswas->count()>0)
			@foreach($mahasiswas as $post)
			<h4>Nama : {{$post->nama}}</h4>
			<h4>NRP : {{$post->nrp}}</h4>
			<h4>Jurusan : {{$post->nama_jurusan}}</h4>
			<h4>SKS Max: {{$post->maxsks}}</h4>
			<h4>IPS : {{$post->ips}}</h4>
			<h4>IPK : {{$post->ipk}}</h4>
			@endforeach
			@endif
		</div>
	</div>

</div>
@endsection