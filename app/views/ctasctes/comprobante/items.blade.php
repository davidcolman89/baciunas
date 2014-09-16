<h3>Items</h3>
<table id="" class="table table-striped table-bordered">
    <thead>
    <tr>
        <th>Tipo</th>
        <th>Contenido</th>
        <th>Moneda</th>
        <th>Monto</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($items as $item)
        <tr>
            <td>{{ $item->IdCuenta    or '' }}</td>
            <td>

            </td>
            <td></td>
            <td>{{ $item->Importe or '' }}</td>
        </tr>
    @endforeach
    </tbody>
</table>