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
			<h4>Nama : </h4>
			<h4>NRP :</h4>
			<h4>SKS Max:</h4>
			<h4>IPS :</h4>
			<h4>IPK :</h4>
		</div>
	</div>

	<div class="panel panel-primary">
		<div class="panel-heading">
			<h3 class="panel-title">Status Mahasiswa
				<a class="anchorjs-link" href="#panel-title">
					<span class="anchorjs-icon"></span>
				</a>
			</h3>
		</div>
		<div class="panel-body">

			<h4>Jurusan :</h4>
			<h4>Angkatan :</h4>
			<h4>Alamat :</h4>
			<h4>Nomor Telepon: </h4>
		</div>
	</div>
</div>
@endsection