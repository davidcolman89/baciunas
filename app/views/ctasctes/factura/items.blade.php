<h3>Items</h3>
<table id="" class="table table-striped table-bordered">
    <thead>
    <tr>
        <th>Producto</th>
        <th>Cantidad</th>
        <th>Kilos</th>
        <th>Detalle</th>
        <th>Monto Unit.</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($items as $item)
    <tr>
        <td>{{ $item->producto->Producto or '' }}</td>
        <td>{{ $item->Contenedores  or '' }}</td>
        <td>{{ $item->Kilos  or '' }}</td>
        <td>{{ $item->NotaFactura  or '' }}</td>
        <td>{{ $item->Neto  or ''}}</td>
    </tr>
    @endforeach
    </tbody>
</table>