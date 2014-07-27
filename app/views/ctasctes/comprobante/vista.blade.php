@extends('index3')
@section('contenido')
<h1 class="page-header">
    <a href="">{{ $cliente->Razon }}</a>
    &nbsp;
    <small>Movimiento #{{ $ctacte->Id }}</small>
</h1>
<div class="row">
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-12">
                <div class="row show-grid">
                    <div class="col-xs-12">
                        <h3>Número {{ $ctacte->Numero }} {{ $ctacte->talonario->TipoComp }}-{{ $ctacte->talonario->Letra }} {{ $ctacte->talonario->Talonario }}</h3>
                    </div>
                </div>
                <div class="row  show-grid">
                    <div class="col-md-3">{{ $cliente->Fact_Direccion }}</div>
                    <div class="col-md-3">{{ $cliente->condicionVenta->Condicion }}</div>
                    <div class="col-md-3">{{ $cliente->categoriaIVA->CategoriaIVA}}</div>
                    <div class="col-md-3">{{ $cliente->CUIT }}cuit</div>
                </div>
                <div class="row  show-grid">
                    <div class="col-md-3">{{ $cliente->facturaLocalidad->Localidad }}</div>
                    <div class="col-md-3">{{ $cliente->facturaProvincia->Provincia}}</div>
                    <div class="col-md-3">{{ $cliente->NroOrdenCompra }}</div>
                    <div class="col-md-3">
                        @if($bCuentaMadre===true)
                            Cuenta Madre
                        @else
                            Cuenta Hija
                        @endif
                    </div>
                </div>
                <div class="row show-grid">
                    <div class="col-md-12">
                        <h3>Fechas</h3>
                    </div>
                    <div class="col-md-12">
                        <div class="row show-grid">
                            <div class="col-xs-2">Fecha Ingreso</div>
                            <div class="col-xs-2">{{ $ctacte->FechaIng }}</div>
                            <div class="col-xs-2">Fecha Doc.</div>
                            <div class="col-xs-2">{{ $ctacte->FechaDoc }}</div>
                            <div class="col-xs-2">Fecha Contab.</div>
                            <div class="col-xs-2">{{ $ctacte->FechaCont }}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row show-grid">
            <div class="col-md-12">
                <h3>Relaciones</h3>
                <table id="tableCtaCteRelaciones" class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th>#CtaCte Relacionada</th>
                        <th>Numero</th>
                        <th>Fecha Rel</th>
                        <th>Tipo Documento</th>
                        <th>Aplicado</th>
                    </tr>
                    </thead>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">

            </div>
        </div>
    </div>
</div>
@stop
@section('js')
<script type="text/javascript" >
    $(document).ready(function() {
        $('#tableCtaCteRelaciones').dataTable({
            "bProcessing" : true,
            "sAjaxSource" : "{{ URL::route('ctasCtesCli.relaciones',$ctacte->Id) }}",
            "aoColumns" : [
                {"data" : "ctacte_relacionada_id"},
                {"data" : "Numero"},
                {"data" : "FechaRel"},
                {"data" : "TipoDocumento"},
                {"data" : "Aplicado"},
            ],
            "language": {
                "url": "{{URL::asset('datatables/json/dataTables.lang.es.json')}}"
            }
        });
    });
</script>
@stop