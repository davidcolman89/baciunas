<h3>Detalle</h3>
<table id="" class="table table-striped table-bordered">
    <thead>
    <tr>
        <th>Tipo</th>
        <th>Cuenta</th>
        <th>Moneda</th>
        <th>Monto</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($valores as $valor)
    <tr>
        <td>{{ $valor->Tipo or '' }}</td>
        <td>{{ $valor->item->cuenta->Cuenta or '' }}</td>
        <td>{{ $ctacte->MonedaLocal or '' }}</td>
        <td>{{ $valor->Monto or '' }}</td>
    </tr>
    @endforeach
    </tbody>
</table>