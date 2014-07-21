@extends('index')
@section('contenido')

<h1 class="page-header">razon</h1>
<div class="row">
    <div class="col-xs-12">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs">
            <li class="active"><a href="#cliente_info" data-toggle="tab">Datos Generales</a></li>
            <li><a href="#cliente_comerciales" data-toggle="tab">Datos Comerciales</a></li>
            <li><a href="#cliente_obs" data-toggle="tab">Observaciones</a></li>
        </ul>
    </div>
</div>
<div class="row">
    <div class="col-xs-12">
        <!-- Tab panes -->
        <div class="tab-content">
            <div class="tab-pane active" id="cliente_info">
                datos generales
            </div>

            <div class="tab-pane" id="cliente_comerciales">
                datos comerciales
            </div>

            <div class="tab-pane" id="cliente_obs">
                observaciones
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xs-12"><hr></div>
</div>
<div class="row show-grid">
    <div class="col-xs-12">
        <table class="table table-responsive">
            <tr>
                <td>Fecha Alta</td>
                <td></td>
                <td>Fecha Ult. Mod.</td>
                <td></td>
                <td>Fecha Inhabilitacion</td>
                <td></td>
            </tr>
            <tr>
                <td>Usuario:</td>
                <td></td>
                <td>Usuario:</td>
                <td></td>
                <td colspan="2">&nbsp;</td>
            </tr>
        </table>
    </div>
</div>

@stop
@section('js')
<script type="application/javascript">
    document.onkeyup=function(event) {
        event = event || window.event;

        var e = event.keyCode;

        if(e == 120){
            alert('ir a ctasctes');
            //window.location.href = "#";
        }else{
            console.log(e);
        }
    }
</script>
@stop