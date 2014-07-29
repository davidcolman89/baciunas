<h3>Items</h3>
<table id="" class="table table-striped table-bordered">
    <thead>
    <tr>
        <th>#Factura</th>
        <th>Cuenta</th>
        <th>Importe</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($items as $item)
        @if($item->IdCuenta > 0)
        <tr>
            <td>{{ $item->IdComprobante }} or '' }}</td>
            <td>{{ $item->cuenta->Cuenta or ''}}</td>
            <td>{{ $item->Importe  or '' }}</td>
        </tr>
        @endif
    @endforeach
    </tbody>
</table>