@extends('index')
@section('contenido')
<div class="row">
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-4">{{ $cliente->Fact_Direccion }}</div>
                    <div class="col-md-4">{{ $cliente->condicionVenta->Condicion }}</div>
                    <div class="col-md-4">{{ $cliente->categoriaIVA->CategoriaIVA}}</div>
                    <div class="col-md-4">{{ $cliente->CUIT }}cuit</div>
                </div>
                <div class="row">
                    <div class="col-md-4">{{ $cliente->facturaLocalidad->Localidad }}</div>
                    <div class="col-md-4">{{ $cliente->facturaProvincia->Provincia}}</div>
                    <div class="col-md-4">{{ $cliente->NroOrdenCompra }}</div>
                    <div class="col-md-4">
                        @if($bCuentaMadre===true)
                            Cuenta Madre
                        @else
                            Cuenta Hija
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-">

            </div>
        </div>
        <div class="row">
            <div class="col-md-">

            </div>
        </div>
    </div>
</div>
@stop