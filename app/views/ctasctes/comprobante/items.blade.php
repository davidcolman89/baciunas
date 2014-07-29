<h3>Items</h3>
<table id="" class="table table-striped table-bordered">
    <thead>
    <tr>
        <th>idcobranza</th>
        <th>idcomprobante</th>
        <th>Cuenta</th>
        <th>Importe</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($items as $item)

        <tr>
            <td>{{ $item->IdCobranza }}</td>
            <td>{{ $item->IdComprobante or '' }}</td>
            <td>{{ $item->IdCuenta    or '' }}</td>
            <td>{{ $item->Importe or '' }}</td>
        </tr>

    @endforeach
    </tbody>
</table>