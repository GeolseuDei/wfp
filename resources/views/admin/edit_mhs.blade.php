@extends('templates.masteradmin')
@section('content')
<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel">
			<div class="x_title">
				<h2>Edit Mahasiswa</h2>
				
				<div class="clearfix"></div>
			</div>
			<div class="x_content">
				<br />

				<form id="form_input_matkul" action="{{action('MasterMahasiswaController@update', $mhs->id)}}" method="POST" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data">
					{{csrf_field()}}
					{{ method_field('PUT') }}
					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">NRP <span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<input type="text" id="nrp" name="nrp" required="required" readonly="" class="form-control col-md-7 col-xs-12" value="{{ $mhs->nrp }}">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Nama Mahasiswa <span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<input type="text" id="namamhs" name="namamhs" required="required" class="form-control col-md-7 col-xs-12" value="{{ $mhs->nama }}">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">IPS <span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<input type="text" id="ips" name="ips" required="required" class="form-control col-md-7 col-xs-12" value="{{ $mhs->ips }}">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">IPK <span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<input type="text" id="ipk" name="ipk" required="required" class="form-control col-md-7 col-xs-12" value="{{ $mhs->ipk }}">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Max SKS <span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<input type="text" id="maxsks" name="maxsks" required="required" class="form-control col-md-7 col-xs-12" value="{{ $mhs->maxsks }}">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Asdos <span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							@if($mhs->asdos == 1)
							<label class="radio-inline"><input type="radio" name="optradio" value="1" checked="checked">Ya</label>
							<label class="radio-inline"><input type="radio" name="optradio" value="0" >Tidak</label>
							@else
							<label class="radio-inline"><input type="radio" name="optradio" value="1" >Ya</label>
							<label class="radio-inline"><input type="radio" name="optradio" value="0" checked="checked">Tidak</label>
							@endif
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Angkatan <span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<input type="number" id="angkatan" name="angkatan" required="required" class="form-control col-md-7 col-xs-12" value="{{ $mhs->angkatan }}">
						</div>
					</div>
					<hr>

					<div class="form-group">
						<label for="email" class="control-label col-md-3 col-sm-3 col-xs-12">Email <span class="required">*</span></label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<input id="email" required="" class="form-control col-md-7 col-xs-12" type="email" name="email" value="{{ $users->email }}">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Username <span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<input type="text" id="username" name="username" required="required" readonly="" class="form-control col-md-7 col-xs-12" value="{{ $users->username }}">
						</div>
					</div>
					<div class="form-group">
						<label for="password" class="control-label col-md-3 col-sm-3 col-xs-12">Password <span class="required">*</span></label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<div class="form-group">
								<input id="password" required="" class="form-control col-md-7 col-xs-12" type="password" name="password" minlength="6">
							</div>
						</div>
					</div>
					
					<div class="ln_solid"></div>
					<div class="form-group">
						<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
							<button class="btn btn-primary" type="button" onclick="window.location='{{ url("master_mahasiswa") }}'">Cancel</button>
							<button class="btn btn-primary" type="reset">Reset</button>
							<button type="submit" class="btn btn-success">Edit</button>
						</div>
					</div>

				</form>
			</div>
		</div>
	</div>
</div>
@endsection