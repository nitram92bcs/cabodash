
@extends('layouts.base')
@section('title','Pagina de Pruebas')
@section('promociones','active')
@section('header')
@endsection
@section('content-header')
<h1>
  Pruebas
  <small>Pagina de Pruebas</small>
</h1>
@endsection
@section('dashboard','skin-red')
@section('content')
  <div  class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-solid">
            <div class="box-header with-border">
              <h3 class="col-md-4 col-lg-5">Nueva Promoci&oacute;n</h3>
              <div class="col-md-8 col-lg-7">
                <div class="form-group col-lg-4 col-md-5">
                  <label>Código<span id="pcd" class="badge label-success"></span> <span id="pcnd" class="badge label-danger"></span></label>
                  <div class="input-group">
                   <input name="promocode" class="form-control valid" id="promocode" placeholder="Código de Promoción" value="" aria-invalid="false" type="text">
                    <span onclick="verifyPromocode();" class="input-group-addon"><span class="glyphicon glyphicon-ok"></span></span>
                    <span onclick="cleanPromo();" class="input-group-addon"><span class="glyphicon glyphicon-erase"></span></span>
                  </div>
                  <label id="promocode-error" class="error" for="promocode" style="display:none;"></label>
                </div>
                <div class="form-group col-md-2 col-sm-3 col-xs-6 text-center">
                  <label  class="text-danger col-md-12">Visible
                  <!-- &nbsp;&nbsp;<a class="badge label-info" href="#" data-toggle="tooltip" title="define si la promoción será visible en el sitio web"><i class="fa fa-question" aria-hidden="true"></i></a> -->
                </label><br>
                  <input id="visibilidad" name="visibilidad" type="checkbox"  class="checkbox-switch" />
                  <!-- data-disabled='true'; -->
                </div>
                <div class="form-group col-md-2 col-sm-3 col-xs-6 text-center">
                  <label  class="text-danger col-md-12">Activa</label><br>
                  <input id="activa" name="activa" type="checkbox" class="checkbox-switch" />
                </div>
                <div class="col-md-2 col-sm-3 col-xs-12">
                  <label>ID</label>
                  <input type="text" name="identify" disabled="true" class="form-control" id="identify" placeholder="ID Promo" value="">
                </div>
                <div class="col-lg-1 col-md-1 col-sm-3 col-xs-12">
                  <label>Guardar</label><br>
                  <button id="SaveAll" class="btn btn-success btn-md hidden-xs"><i class="fa fa-floppy-o" aria-hidden="true"></i></button>
                  <button id="SaveAll" class="btn btn-success btn-md visible-xs-block col-xs-12"><i class="fa fa-floppy-o" aria-hidden="true"></i></button>
                </div>
            </div>
            </div>
            <!-- /.box-header -->
          </div>


      </div>
      <div class="col-md-12">

      </div>


  	</div>
  </div>
<!-- /.content -->
@endsection
@section('script')

@endsection
