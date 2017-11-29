@extends('templates.masteradmin')
@section('content')
<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel">
			<div class="x_title">
				<h2>Input Dosen</h2>
				
				<div class="clearfix"></div>
			</div>
			<div class="x_content">
				<br />

				<form id="form_input_matkul" action="{{url('master_dosen')}}" method="POST" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data">
					{{csrf_field()}}
					@if($dosens->count()>0)
					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">NIK <span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							@if($dosens->count()+1<10)
							<input type="text" id="nik" name="nik" required="required" readonly="" class="form-control col-md-7 col-xs-12" value="d00{{$dosens->count()+1}}">
							@elseif($dosens->count()+1<100)
							<input type="text" id="nik" name="nik" required="required" readonly="" class="form-control col-md-7 col-xs-12" value="d0{{$dosens->count()+1}}">
							@else
							<input type="text" id="nik" name="nik" required="required" readonly="" class="form-control col-md-7 col-xs-12" value="d{{$dosens->count()+1}}">
							@endif
						</div>
					</div>
					@endif
					<input type="hidden" value="{{$users->count()+1}}" name="iddosenbaru">
					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Nama Dosen <span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<input type="text" id="nama-namadosen" name="namadosen" required="required" class="form-control col-md-7 col-xs-12">
						</div>
					</div>
					<hr>
					<div class="form-group">
						<label for="email" class="control-label col-md-3 col-sm-3 col-xs-12">Email <span class="required">*</span></label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<input id="email" required="" class="form-control col-md-7 col-xs-12" type="email" name="email">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Username <span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							@if($dosens->count()+1<10)
							<input type="text" id="username" name="username" required="required" readonly="" class="form-control col-md-7 col-xs-12" value="d00{{$dosens->count()+1}}">
							@elseif($dosens->count()+1<100)
							<input type="text" id="username" name="username" required="required" readonly="" class="form-control col-md-7 col-xs-12" value="d0{{$dosens->count()+1}}">
							@else
							<input type="text" id="username" name="username" required="required" readonly="" class="form-control col-md-7 col-xs-12" value="d{{$dosens->count()+1}}">
							@endif
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
							<button class="btn btn-primary" type="button" onclick="window.location='{{ url("admin_page") }}'">Cancel</button>
							<button class="btn btn-primary" type="reset">Reset</button>
							<button type="submit" class="btn btn-success">Submit</button>
						</div>
					</div>

				</form>
			</div>
		</div>
	</div>
</div>
@endsection