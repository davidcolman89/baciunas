@extends('index3')
@section('url_historial')
    <li>{{ link_to_route('home','Inicio') }}</li>
    <li>Documentos de Terceros</li>
    <li>#{{$documento->Id}}</li>
@stop
@section('contenido')
    <div class="row">
        <div class="form-group col-xs-2">Código</div>
        <div class="form-group col-xs-2">{{$documento->Id }}</div>
        <div class="form-group col-xs-2">Tipo de Documento</div>
        <div class="form-group col-xs-2">{{$documento->tipoMovimiento->TipoMov or ''}}</div>
    </div>
    <div class="row">
        <div class="form-group col-xs-2">Fec. Documento</div>
        <div class="form-group col-xs-2">{{ $documento->FechaDoc or ''}}</div>
        <div class="form-group col-xs-2">Fec. Ejecución</div>
        <div class="form-group col-xs-2">{{ $documento->FechaEje or '' }}</div>
        <div class="form-group col-xs-2">Capturar con lectura de cheques</div>
    </div>
    <div class="row">
        <div class="form-group col-xs-2">Banco Emisor:</div>
        <div class="form-group col-xs-2">{{$documento->banco->Banco or ''}}</div>
    </div>
    <div class="row">
        <div class="form-group col-xs-2">N° de Cuenta Bancaria:</div>
        <div class="form-group col-xs-2">{{$documento->NroCuenta or ''}}</div>
        <div class="form-group col-xs-2">Sucursal:</div>
        <div class="form-group col-xs-2">{{$documento->NroSucursal or ''}}</div>
        <div class="form-group col-xs-2">Cod. Postal:</div>
        <div class="form-group col-xs-2">{{$documento->NroCodPos or ''}}</div>
        <div class="form-group col-xs-2">Nro Documento / Cheque: </div>
        <div class="form-group col-xs-2">{{$documento->NroDocumento or ''}}</div>
    </div>
    <div class="row">
        <div class="form-group col-xs-2">Moneda Local <input type="checkbox" checked  disabled></div>
        <div class="form-group col-xs-2">Monto</div>
        <div class="form-group col-xs-2">{{$documento->Monto or ''}}</div>
        <div class="form-group col-xs-2">Estado del Documento</div>
        <div class="form-group col-xs-2">{{$documento->estado->Estado or ''}}</div>
    </div>
    <div class="row">
        <div class="form-group col-xs-2">Leyenda</div>
        <div class="form-group col-xs-2">{{$documento->Leyenda or ''}}</div>
    </div>
    <div class="row">
        <div class="form-group col-xs-2">Origen del documento</div>
        <div class="form-group col-xs-2"></div>
        <div class="form-group col-xs-2">Codigo de cuenta</div>
        <div class="form-group col-xs-2">{{$documento->CodCuenta or ''}}</div>
        <div class="form-group col-xs-2"><strong>{{$documento->cliente->Razon or ''}}</strong></div>
    </div>
    <div class="row">
        <div class="form-group col-xs-2">Titular</div>
        <div class="form-group col-xs-2">{{$documento->Titular or ''}}</div>
        <div class="form-group col-xs-2">C.U.I.T</div>
        <div class="form-group col-xs-2">{{$documento->CUIT or ''}}</div>
    </div>
    <div class="row">
        <div class="form-group col-xs-2">Nota</div>
        <div class="form-group col-xs-2">{{$documento->Notas or ''}}</div>
        <div class="form-group col-xs-2">Fecha del Sal. / Dep.</div>
        <div class="form-group col-xs-2">{{$documento->FechaSal or ''}}</div>
        <div class="form-group col-xs-2">Destino Final del Documento</div>
        <div class="form-group col-xs-2">{{$documento->Destino or ''}}</div>
    </div>
@stop
@section('js')
    <script type="application/javascript">

        $(function () {

        });
    </script>
@stop