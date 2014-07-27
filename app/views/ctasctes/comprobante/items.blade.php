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
    <tr>
        <td>{{ $item->IdComprobante }} {{ $item->comprobante->Numero or '' }}</td>
        <td>{{ $item->cuenta->Cuenta or ''}}</td>
        <td>{{ $item->Importe  or '' }}</td>
    </tr>
    @endforeach
    </tbody>
</table>