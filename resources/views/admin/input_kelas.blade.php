@extends('templates.masteradmin')
@section('content')
<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel">
			<div class="x_title">
				<h2>Input Kelas</h2>
				
				<div class="clearfix"></div>
			</div>
			<div class="x_content">
				<br />

				<form id="form_input_matkul" action="{{url('master_kelas')}}" method="POST" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data">
					{{csrf_field()}}

					
					<div class="form-group">
						
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Mata Kuliah <span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<select id="cboJurusan" class="form-control" name="matkul">
								<option value="">Pilih Mata kuliah</option>
								@foreach($matkuls as $post)
								<option value="{{$post->id}}">{{$post->nama}}</option>
								@endforeach
							</select>
						</div>
					</div>

					
					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Dosen Pengajar <span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<select id="cboDosen" class="form-control" name="dosen">
								<option value="">Pilih Dosen</option>
								@foreach($dosens as $post)
								<option value="{{$post->id}}">{{$post->nama}}</option>
								@endforeach
							</select>
						</div>
					</div>
					<!-- <script>
						$("#cboJurusan").change(function () {
							var id = $("#cboJurusan").val();
							window.location = "{{url('MasterKelasController','"+ id +"')}}";
							// $("#cboMatkul").empty();
							// $("#cboDosen").empty();
							// var id = $("#cboJurusan").val();
							// console.log(id);
							// $("#cboMatkul").append('<option value="">Pilih Matkul</option>');
							// @foreach($matkuls->where('id_jurusan', '=', 2) as $post)
							// $("#cboMatkul").append('<option value="{{$post->id}}">{{$post->nama}}</option>');
							// @endforeach	
						});
						$("#cboMatkul").change(function () {
							$("#cboDosen").empty();
							var id = $("#cboMatkul").val();
							$("#cboDosen").append('<option value="">Pilih Dosen</option>');
							@foreach($dosens as $post)
							$("#cboDosen").append('<option value="{{$post->id}}">{{$post->nama}}</option>');
							@endforeach	
						});
					</script> -->
					<hr>
					<div class="form-group">
						<label for="email" class="control-label col-md-3 col-sm-3 col-xs-12">Hari <span class="required">*</span></label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<input id="hari" required="" class="form-control col-md-7 col-xs-12" type="text" name="hari">
						</div>
					</div>

					<div class="form-group">
						<label for="password" class="control-label col-md-3 col-sm-3 col-xs-12">Jam Masuk <span class="required">*</span></label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<input id="jammasuk" required="" class="form-control col-md-7 col-xs-12" type="text" name="jammasuk" maxlength="5">
							
						</div>
					</div>

					<div class="form-group">
						<label for="password" class="control-label col-md-3 col-sm-3 col-xs-12">Jam Keluar <span class="required">*</span></label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<input id="jamkeluar" required="" class="form-control col-md-7 col-xs-12" type="text" name="jamkeluar" maxlength="5">
							
						</div>
					</div>

					<div class="form-group">
						<label for="password" class="control-label col-md-3 col-sm-3 col-xs-12">KP <span class="required">*</span></label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<input id="kp" required="" class="form-control col-md-7 col-xs-12" type="text" name="kp" maxlength="1">
							
						</div>
					</div>

					<div class="form-group">
						<label for="password" class="control-label col-md-3 col-sm-3 col-xs-12">Ruang <span class="required">*</span></label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<input id="ruang" required="" class="form-control col-md-7 col-xs-12" type="text" name="ruang">
							
						</div>
					</div>

					<div class="form-group">
						<label for="password" class="control-label col-md-3 col-sm-3 col-xs-12">Kapasitas <span class="required">*</span></label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<input id="kapasitas" required="" class="form-control col-md-7 col-xs-12" type="number" name="kapasitas">
							
						</div>
					</div>
					<div class="ln_solid"></div>
					<div class="form-group">
						<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
							<button class="btn btn-primary" type="button" onclick="window.location='{{ url("master_kelas") }}'">Cancel</button>
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