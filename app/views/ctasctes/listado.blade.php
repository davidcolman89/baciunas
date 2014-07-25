@extends('index2')
@section('url_historial')
<li>{{ link_to_route('home','Inicio') }}</li>
<li>{{ link_to_route('clientes.listado','Clientes') }}</li>
<li>{{ link_to_route('clientes.show',$cliente->Razon,$cliente->Id) }}</li>
<li>Cuenta Corriente</li>
@stop
@section('contenido')
<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="tableCliCtaCte">
    <thead>
    <tr>
        <th># CtaCte</th>
        <th>TipoComp</th>
        <th># Numero</th>
        <th>Fecha Ingreso</th>
        <th>Debe</th>
        <th>Total Debe</th>
        <th>Haber</th>
        <th>Total Haber</th>

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
                {"data" : "Id"},
                {"data" : "TipoComp"},
                {"data" : "Numero"},
                {"data" : "FechaIng"},
                {"data" : "Debe"},
                {"data" : "TotalDebe"},
                {"data" : "Haber"},
                {"data" : "TotalHaber"},
            ],
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