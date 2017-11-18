@extends('templates.masteradmin')
@section('content')
<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel">
			<div class="x_title">
				<h2>Input Mata Kuliah</h2>
				
				<div class="clearfix"></div>
			</div>
			<div class="x_content">
				<br />
				<form id="form_input_matkul" action="#" method="POST" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data">

					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Kode Mata Kuliah <span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<input type="text" id="kode-matkul" name="kode_matkul" required="required" class="form-control col-md-7 col-xs-12">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Nama Mata Kuliah <span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<input type="text" id="nama-matkul" name="nama_matkul" required="required" class="form-control col-md-7 col-xs-12">
						</div>
					</div>
					<div class="form-group">
						<label for="hari" class="control-label col-md-3 col-sm-3 col-xs-12">Hari <span class="required">*</span></label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<input id="hari" required="" class="form-control col-md-7 col-xs-12" type="text" name="hari">
						</div>
					</div>
					<div class="form-group">
						<label for="jam-mulai" class="control-label col-md-3 col-sm-3 col-xs-12">Jam Mulai <span class="required">*</span></label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<input id="jam-mulai" required="" class="form-control col-md-7 col-xs-12" type="text" name="jam_mulai">
						</div>
					</div>
					<div class="form-group">
						<label for="jam-selesai" class="control-label col-md-3 col-sm-3 col-xs-12">Jam Selesai <span class="required">*</span></label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<input id="jam-selesai" required="" class="form-control col-md-7 col-xs-12" type="text" name="jam_selesai">
						</div>
					</div>
					<div class="form-group">
						<label for="sks" class="control-label col-md-3 col-sm-3 col-xs-12">SKS <span class="required">*</span></label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<input id="sks" required="" class="form-control col-md-7 col-xs-12" type="number" name="sks">
						</div>
					</div>
					<div class="form-group">
						<label for="kp" class="control-label col-md-3 col-sm-3 col-xs-12">KP <span class="required">*</span></label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<input id="kp" required="" class="form-control col-md-7 col-xs-12" type="text" name="kp">
						</div>
					</div>
					<div class="form-group">
						<label for="dosen-pengajar" class="control-label col-md-3 col-sm-3 col-xs-12">Dosen Pengajar <span class="required">*</span></label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<textarea class="form-control" rows="3" required="" id="dosen_pengajar" name="dosen_pengajar"></textarea>
						</div>
					</div>
					<div class="form-group">
						<label for="kapasitas" class="control-label col-md-3 col-sm-3 col-xs-12">Kapasitas <span class="required">*</span></label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<input id="kapasitas" required="" class="form-control col-md-7 col-xs-12" type="number" name="kapasitas">
						</div>
					</div>
					<div class="form-group">
						<label for="ruangan" class="control-label col-md-3 col-sm-3 col-xs-12">Ruangan <span class="required">*</span></label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<input id="ruangan" required="" class="form-control col-md-7 col-xs-12" type="text" name="ruangan">
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