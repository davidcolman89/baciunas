@extends('index2')
@section('url_historial')
<li>{{ link_to_route('home','Inicio') }}</li>
<li>Cuentas Corrientes</li>
@stop
@section('contenido')
<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="dt-clientes">
    <thead>
    <tr>
        <th># Cliente</th>
        <th>Razon Social</th>
        <th>Accion</th>
    </tr>
    </thead>
</table>
@stop
@section('js')
<script type="text/javascript" >
    $(document).ready(function() {
        $('#dt-clientes').dataTable({
            "bProcessing" : true,
            "sAjaxSource" : "{{URL::route('ctasCtesCli.listadoCli')}}",
            "aoColumns" : [
                {"data" : "id"},
                {"data" : "razon"},
                {"data" : "accion"}
            ],
            "language": {
                "url": "{{URL::asset('datatables/json/dataTables.lang.es.json')}}"
            },
            "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "Todo"]],
            "iDisplayLength" : -1
        });
    });
</script>
@stop