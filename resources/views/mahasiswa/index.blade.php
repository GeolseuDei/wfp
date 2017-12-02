
@extends('templates.mastermhs')
@section('content')
<div class="container">
	<h3>Tanggal Perwalian</h3>

	<div class="row" style="margin-top: 2%; ">
    <!-- 1 -->

    <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading">
          <h3 class="panel-title">FPP 1
            <a class="anchorjs-link" href="#panel-title">
              <span class="anchorjs-icon"></span>
            </a>
          </h3>
        </div>
        <div class="panel-body"> 
          @if($fpp1->count()>0)
          <?php
            $tglmulai = explode(" ",$fpp1[0]->tgl_mulai);
            $tglselesai = explode(" ",$fpp1[0]->tgl_selesai);
          ?>
          <h4>Tanggal Mulai : {{$tglmulai[0]}}</h4>
          <h4>Tanggal Selesai : {{$tglselesai[0]}}</h4>
          @else
          <h4>Tanggal Mulai :</h4>
          <h4>Tanggal Selesai :</h4>
          @endif

        </div>
      </div>
    </div>

    <!-- 2 -->

    <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading">
          <h3 class="panel-title">FPP 2
            <a class="anchorjs-link" href="#panel-title">
              <span class="anchorjs-icon"></span>
            </a>
          </h3>
        </div>
        <div class="panel-body">

          @if($fpp2->count()>0)
          <?php
            $tglmulai = explode(" ",$fpp2[0]->tgl_mulai);
            $tglselesai = explode(" ",$fpp2[0]->tgl_selesai);
          ?>
          <h4>Tanggal Mulai : {{$tglmulai[0]}}</h4>
          <h4>Tanggal Selesai : {{$tglselesai[0]}}</h4>
          @else
          <h4>Tanggal Mulai :</h4>
          <h4>Tanggal Selesai :</h4>
          @endif

        </div>
      </div>
    </div>

    <!-- 3 -->

    <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading">
          <h3 class="panel-title">Kasus Khusus
            <a class="anchorjs-link" href="#panel-title">
              <span class="anchorjs-icon"></span>
            </a>
          </h3>
        </div>
        <div class="panel-body">

          @if($fpp3->count()>0)
          <?php
            $tglmulai = explode(" ",$fpp3[0]->tgl_mulai);
            $tglselesai = explode(" ",$fpp3[0]->tgl_selesai);
          ?>
          <h4>Tanggal Mulai : {{$tglmulai[0]}}</h4>
          <h4>Tanggal Selesai : {{$tglselesai[0]}}</h4>
          @else
          <h4>Tanggal Mulai :</h4>
          <h4>Tanggal Selesai :</h4>
          @endif

        </div>
      </div>
    </div>

  </div>
</div>


@endsection