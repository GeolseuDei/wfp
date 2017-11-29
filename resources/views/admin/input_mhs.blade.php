@extends('templates.masteradmin')
@section('content')
<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel">
			<div class="x_title">
				<h2>Input Mahasiswa</h2>
				
				<div class="clearfix"></div>
			</div>
			<div class="x_content">
				<br />

				<form id="form_input_matkul" action="{{url('master_mahasiswa')}}" method="POST" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data">
					{{csrf_field()}}
					@if($mhs->count()>0)
					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">NRP <span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							@if($mhs->count()+1<10)
							<input type="text" id="nrp" name="nrp" required="required" readonly="" class="form-control col-md-7 col-xs-12" value="m00{{$mhs->count()+1}}">
							@elseif($mhs->count()+1<100)
							<input type="text" id="nrp" name="nrp" required="required" readonly="" class="form-control col-md-7 col-xs-12" value="m0{{$mhs->count()+1}}">
							@else
							<input type="text" id="nrp" name="nrp" required="required" readonly="" class="form-control col-md-7 col-xs-12" value="m{{$mhs->count()+1}}">
							@endif
						</div>
					</div>
					@endif
					<input type="hidden" value="{{$users->count()+1}}" name="idmhsbaru">
					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Nama Mahasiswa <span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<input type="text" id="namamhs" name="namamhs" required="required" class="form-control col-md-7 col-xs-12">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">IPS <span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<input type="text" id="ips" name="ips" required="required" class="form-control col-md-7 col-xs-12">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">IPK <span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<input type="text" id="ipk" name="ipk" required="required" class="form-control col-md-7 col-xs-12">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Max SKS <span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<input type="text" id="maxsks" name="maxsks" required="required" class="form-control col-md-7 col-xs-12">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Asdos <span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<label class="radio-inline"><input type="radio" name="optradio" value="1" >Ya</label>
							<label class="radio-inline"><input type="radio" name="optradio" value="0" checked="checked">Tidak</label>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Angkatan <span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<input type="number" id="angkatan" name="angkatan" required="required" class="form-control col-md-7 col-xs-12">
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
							@if($mhs->count()+1<10)
							<input type="text" id="username" name="username" required="required" readonly="" class="form-control col-md-7 col-xs-12" value="m00{{$mhs->count()+1}}">
							@elseif($mhs->count()+1<100)
							<input type="text" id="username" name="username" required="required" readonly="" class="form-control col-md-7 col-xs-12" value="m0{{$mhs->count()+1}}">
							@else
							<input type="text" id="username" name="username" required="required" readonly="" class="form-control col-md-7 col-xs-12" value="m{{$mhs->count()+1}}">
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
							<button class="btn btn-primary" type="button" onclick="window.location='{{ url("master_mahasiswa") }}'">Cancel</button>
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