@extends('index3')
@section('url_historial')
<li>{{ link_to_route('home','Inicio') }}</li>
<li>{{ link_to_route('clientes.index','Clientes') }}</li>
<li>{{ link_to_route('clientes.show',$cliente->Razon,$cliente->Id) }}</li>
<li>{{ link_to_route('ctasCtesCli.cliente','Cuenta Corriente',$cliente->Id) }}</li>
<li>Comprobante #{{ $ctacte->Id }}</li>
@stop
@section('contenido')

<div class="row">
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-12">
                <div class="row show-grid">
                    <div class="col-xs-12 col-md-12">
                        <h3>Número {{ $ctacte->Numero }} {{ $ctacte->talonario->TipoComp }}-{{ $ctacte->talonario->Letra }} {{ $ctacte->talonario->Talonario }}</h3>
                    </div>
                    <div class="col-xs-12 col-md-12">
                        @if($bCuentaMadre===true)
                        <strong>Cuenta Madre</strong>
                        @else
                        <strong>Cuenta Hija</strong>
                        @endif
                    </div>
                </div>
                <div class="row  show-grid">
                    <div class="col-xs-12 col-md-2"><strong>Dirección</strong></div>
                    <div class="col-xs-12 col-md-2">{{ $cliente->Fact_Direccion }}</div>
                    <div class="col-xs-12 col-md-2"><strong>Condición</strong></div>
                    <div class="col-xs-12 col-md-2">{{ $cliente->condicionVenta->Condicion }}</div>
                    <div class="col-xs-12 col-md-2"><strong>Categoría IVA</strong></div>
                    <div class="col-xs-12 col-md-2">{{ $cliente->categoriaIVA->CategoriaIVA}}</div>

                </div>
                <div class="row  show-grid">
                    <div class="col-xs-12 col-md-2"><strong>CUIT</strong></div>
                    <div class="col-xs-12 col-md-2">{{ $cliente->CUIT }}</div>
                    <div class="col-xs-12 col-md-2"><strong>Localidad</strong></div>
                    <div class="col-xs-12 col-md-2">{{ $cliente->facturaLocalidad->Localidad }}</div>
                    <div class="col-xs-12 col-md-2"><strong>Provincia</strong></div>
                    <div class="col-xs-12 col-md-2">{{ $cliente->facturaProvincia->Provincia}}</div>
                    <div class="col-xs-12 col-md-2"><strong>Número Orden Compra</strong></div>
                    <div class="col-xs-12 col-md-2">{{ $cliente->NroOrdenCompra or '-' }}</div>
                </div>
                <div class="row show-grid">
                    <div class="col-md-12">
                        <h3>Fechas</h3>
                    </div>
                    <div class="col-md-12">
                        <div class="row show-grid">
                            <div class="col-xs-12 col-md-2"><strong>Fecha Ingreso</strong></div>
                            <div class="col-xs-12 col-md-2">{{ $ctacte->FechaIng }}</div>
                            <div class="col-xs-12 col-md-2"><strong>Fecha Doc.</strong></div>
                            <div class="col-xs-12 col-md-2">{{ $ctacte->FechaDoc }}</div>
                            <div class="col-xs-12 col-md-2"><strong>Fecha Contable</strong></div>
                            <div class="col-xs-12 col-md-2">{{ $ctacte->FechaCont }}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row show-grid">
            <div class="col-md-12">
                @if(!empty($ctacte->IDCobranza))
                    @include('ctasctes.comprobante.valores')
                @else
                    @include('ctasctes.factura.items')
                @endif
            </div>
        </div>
        <div class="row show-grid">
            <div class="col-md-12">
                <h3>Relaciones</h3>
                <table id="tableCtaCteRelaciones" class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th>#Número</th>
                        <th>Fecha</th>
                        <th>Tipo Documento</th>
                        <th>Aplicado</th>
                    </tr>
                    </thead>
                </table>
            </div>
            <div class="col-md-12">
                <table id="" class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th>Neto grabado</th>
                        <th>Neto no grabado</th>
                        <th>IVA 21%</th>
                        <th>IVA 10.5%</th>
                        <th>Total</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>{{ $ctacte->NetoGravado }}</td>
                        <td>{{ $ctacte->NetoNoGravado }}</td>
                        <td>{{ $ctacte->MontoIva1 }}</td>
                        <td>{{ $ctacte->MontoIva2 }}</td>
                        <td>{{ $ctacte->Total }}</td>
                    </tr>
                    </tbody>
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
                {"data" : "Numero"},
                {"data" : "FechaRel"},
                {"data" : "TipoDocumento"},
                {"data" : "Aplicado"},
            ],
            "language": {
                "url": "{{URL::asset('datatables/json/dataTables.lang.es.json')}}"
            },
            "sDom":''
        });
    });
</script>
@stop