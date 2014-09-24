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
        <td>{{ $item['producto'] }}</td>
        <td>{{ $item['contenedores'] }}</td>
        <td>{{ $item['kilos'] }}</td>
        <td>{{ $item['notaFactura'] }}</td>
        <td>{{ $item['neto'] }}</td>
    </tr>
    @endforeach
    </tbody>
</table>