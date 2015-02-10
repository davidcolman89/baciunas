@extends('index3')
@section('pagina_titulo')
Clientes
@stop
@section('url_historial')
<li>{{ link_to_route('home','Inicio') }}</li>
<li>Clientes</li>
@stop
@section('contenido')
<form >
    <div class="row">
        <div class="col-xs-12">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#cliente_info" data-toggle="tab">Datos Generales</a></li>
                <li><a href="#cliente_comerciales" data-toggle="tab">Datos Comerciales</a></li>
                <li><a href="#cliente_obs" data-toggle="tab">Observaciones</a></li>
                <li><a href="#" id="link-guardar-cliente">Guardar</a></li>
            </ul>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <div class="tab-content">
                <div class="tab-pane active" id="cliente_info">
                    <div class="form-group">
                        <div class="col-md-4">
                            Razon <input class="form-control" type="text" name="">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-4">
                            Comercial <input class="form-control" type="text" name="">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-4">
                            CUIT <input class="form-control" type="text" name="">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-4">
                            Web <input class="form-control" type="text" name="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            Razon <input class="form-control" type="text" name="">
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="cliente_comerciales">
                </div>
                <div class="tab-pane" id="cliente_obs">
                    <div class="form-group">
                        <div class="col-md-4">
                            Observaciones <textarea class="form-control"></textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
@stop
@section('js')
<script type="text/javascript">
    $(document).ready(function () {
        $("#link-guardar-cliente").click(function(){
        });
    });
</script>
@stop