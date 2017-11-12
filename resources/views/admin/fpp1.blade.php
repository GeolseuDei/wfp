@extends('templates.masteradmin')
@section('content')
<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>Set Tanggal FPP 1<small></small></h2>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
        <br />
        <form id="fpp" action=""  data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data">
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Tanggal Mulai <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="date" id="tanggal-mulai" name="tanggal_mulai" required="required" class="form-control col-md-7 col-xs-12">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Tanggal Selesai <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="date" id="tanggal-selesai" name="tanggal_selesai" required="required" class="form-control col-md-7 col-xs-12">
            </div>
          </div>

          <div class="ln_solid"></div>
          <div class="form-group">
            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
              <button class="btn btn-primary" type="button">Cancel</button>
              <button class="btn btn-primary" type="reset">Reset</button>
              <button type="submit" name="submit" value="Submit" class="btn btn-success">Submit</button>
            </div>
          </div>
        </form>
        
      </div>
    </div>
  </div>
</div>
@endsection