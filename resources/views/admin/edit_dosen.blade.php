@extends('templates.masteradmin')
@section('content')
<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel">
			<div class="x_title">
				<h2>Edit Dosen</h2>
				
				<div class="clearfix"></div>
			</div>
			<div class="x_content">
				<br />

				<form id="form_input_matkul" action="{{action('MasterDosenController@update', $dosens->id)}}" method="POST" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data">
					{{csrf_field()}}
					{{ method_field('PUT') }}
					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">NIK <span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<input type="text" id="nik" name="nik" required="required" readonly="" class="form-control col-md-7 col-xs-12" value="{{ $dosens->nik }}">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Nama Dosen <span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<input type="text" id="nama-namadosen" name="namadosen" required="required" class="form-control col-md-7 col-xs-12" value="{{ $dosens->nama }}">
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
							<button class="btn btn-primary" type="button" onclick="window.location='{{ url("master_dosen") }}'">Cancel</button>
							<button class="btn btn-primary" type="reset">Reset</button>
							<button type="submit" class="btn btn-success">Update</button>
						</div>
					</div>

				</form>
			</div>
		</div>
	</div>
</div>
@endsection