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

				<form id="form_input_matkul" action="{{url('edit_matkul')}}" method="POST" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data">
					{{csrf_field()}}
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
						<label for="sks" class="control-label col-md-3 col-sm-3 col-xs-12">SKS <span class="required">*</span></label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<input id="sks" required="" class="form-control col-md-7 col-xs-12" type="number" name="sks">
						</div>
					</div>
					<div class="form-group">
						<label for="jurusan" class="control-label col-md-3 col-sm-3 col-xs-12">Jurusan <span class="required">*</span></label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<div class="form-group">
								<select class="form-control" name="jurusan">
									<option value="">Pilih Jurusan</option>
									@if($jurusans->count()>0)
									@foreach($jurusans as $post)
										<option value="{{$post['id']}}">{{ $post['nama'] }}</option>
									@endforeach
									@endif
								</select>
							</div>
						</div>
					</div>
					<div class="form-group">
						<label for="status" class="control-label col-md-3 col-sm-3 col-xs-12">Status <span class="required">*</span></label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<label class="radio-inline"><input type="radio" name="optradio" value="1" checked="checked">Aktif</label>
							<label class="radio-inline"><input type="radio" name="optradio" value="0">Tidak Aktif</label>
						</div>
					</div>
					<div class="form-group">
						<label for="semester" class="control-label col-md-3 col-sm-3 col-xs-12">Semester <span class="required">*</span></label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<input id="semester" required="" class="form-control col-md-7 col-xs-12" type="number" name="semester">
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