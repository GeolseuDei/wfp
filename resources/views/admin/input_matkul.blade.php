@extends('templates.masteradmin')
@section('content')
<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel">
			<div class="x_title">
				<h2>Input Mata Kuliah</h2>
				<ul class="nav navbar-right panel_toolbox">
					<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
					</li>
					
				</ul>
				<div class="clearfix"></div>
			</div>
			<div class="x_content">
				<br />
				<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Kode Mata Kuliah <span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Nama Mata Kuliah <span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<input type="text" id="last-name" name="last-name" required="required" class="form-control col-md-7 col-xs-12">
						</div>
					</div>
					<div class="form-group">
						<label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Hari</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="middle-name">
						</div>
					</div>
					<div class="form-group">
						<label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Jam Mulai</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="jam_mulai">
						</div>
					</div>
					<div class="form-group">
						<label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Jam Selesai</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="jam_selesai">
						</div>
					</div>
					<div class="form-group">
						<label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">SKS</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<input id="middle-name" class="form-control col-md-7 col-xs-12" type="number" name="middle-name">
						</div>
					</div>
					<div class="form-group">
						<label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">KP</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="middle-name">
						</div>
					</div>
					<div class="form-group">
						<label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Dosen Pengajar</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<textarea class="form-control" rows="3" id="dosen_pengajar" name="dosen_pengajar"></textarea>
						</div>
					</div>
					<div class="form-group">
						<label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Kapasitas</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<input id="middle-name" class="form-control col-md-7 col-xs-12" type="number" name="middle-name">
						</div>
					</div>
					<div class="form-group">
						<label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Ruangan</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="middle-name">
						</div>
					</div>
					<div class="ln_solid"></div>
					<div class="form-group">
						<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
							<button class="btn btn-primary" type="button">Cancel</button>
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