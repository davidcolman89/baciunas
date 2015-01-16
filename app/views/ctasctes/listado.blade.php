@extends('index3')
@section('pagina_titulo')
Cuenta Corriente
@stop
@section('url_historial')
<li>{{ link_to_route('home','Inicio') }}</li>
<li>{{ link_to_route('clientes.index','Clientes') }}</li>
<li>{{ link_to_route('clientes.show',$cliente->Razon,$cliente->Id) }}</li>
<li>Cuenta Corriente</li>
@stop
@section('contenido')
<style rel="stylesheet" type="text/css">
    .positivo {
        color: #000000;
    }
    .negativo {
        color: #ff0000;
    }
</style>
<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="tableCliCtaCte">
    <thead>
    <tr>
        <th># Numero</th>
        <th># CtaCte</th>
        <th>TipoComp</th>
        <th>Fecha Ingreso</th>
        <th>Total Debe</th>
        <th>Total Haber</th>
        <th>Saldo</th>

    </tr>
    </thead>
</table>
@stop
@section('js')
<script type="text/javascript" >
    $(document).ready(function() {
        $('#tableCliCtaCte').dataTable({
            "bProcessing" : true,
            "sAjaxSource" : "{{ URL::route('ctasCtesCli.listado', $cliente->Id) }}",
            "aoColumns" : [
                {"data" : "Numero"},
                {"data" : "Id"},
                {"data" : "TipoComp"},
                {"data" : "FechaIng"},
                {"data" : "TotalDebe"},
                {"data" : "TotalHaber"},
                {"data" : "Saldo"},
            ],
            /*"order": [[ 0, "desc" ]],*/
            "ordering": false,
            "scrollX":true,
            "language": {
                "url": "{{URL::asset('datatables/json/dataTables.lang.es.json')}}"
            },
            "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "Todo"]],
            "iDisplayLength" : 10
        });
    });
</script>
@stop