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
        @if($errors->any())
        <h4>{{$errors->first()}}</h4>
        @endif
        
        @if($fpps->count()>0)
        @foreach($fpps as $post)
        
        <!-- DATA ADA, FORM UPDATE -->
        <form method="POST" 
        action="{{action('FPP1Controller@update', $post['id'])}}"  data-parsley-validate class="form-horizontal form-label-left">

        <div class="form-group">
          {{csrf_field()}}
          {{method_field('put')}}
          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Tanggal Mulai <span class="required">*</span>
          </label>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <input type="date" id="tanggal-mulai" min="2017-10-15" name="tgl_mulai" required="required" class="form-control col-md-7 col-xs-12" value="{{$post['tgl_mulai']}}">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Tanggal Selesai <span class="required">*</span>
          </label>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <input type="date" id="tanggal-selesai" min="2017-10-15" name="tgl_selesai" required="required" class="form-control col-md-7 col-xs-12" value="{{$post['tgl_selesai']}}">
          </div>
        </div>

        <div class="ln_solid"></div>
        <div class="form-group">
          <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
            <button class="btn btn-primary" type="button" onclick="window.location='{{ url("admin_page") }}'">Cancel</button>
            <button class="btn btn-primary" type="reset">Reset</button>
            <button type="submit" class="btn btn-success">Update</button>
          </div>
        </div>
      </form>
      @endforeach
      @else
      <!-- DATA GAK ADA, FORM INSERT -->
      <form action="{{url('fpp1')}}" method="POST" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data">

        <div class="form-group">
          {{csrf_field()}}
          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Tanggal Mulai <span class="required">*</span>
          </label>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <input type="date" id="tanggal-mulai" min="2017-10-15" name="tgl_mulai" required="required" class="form-control col-md-7 col-xs-12" >
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Tanggal Selesai <span class="required">*</span>
          </label>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <input type="date" id="tanggal-selesai" min="2017-10-15" name="tgl_selesai" required="required" class="form-control col-md-7 col-xs-12" >
          </div>
        </div>

        <div class="ln_solid"></div>
        <div class="form-group">
          <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
            <button class="btn btn-primary" type="button" onclick="window.location='{{ url("admin_page") }}'">Cancel</button>
            <button class="btn btn-primary" type="reset">Reset</button>
            <button type="submit" name="submit" value="Submit" class="btn btn-success">Submit</button>
          </div>
        </div>
      </form>
      @endif

    </div>
  </div>
</div>
</div>
@endsection