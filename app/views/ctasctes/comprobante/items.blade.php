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
            <td>{{ $tiposCuenta[$item->IdCuenta] }}</td>
            @if($item->IdCuenta==1)
                <td></td>
            @elseif($item->IdCuenta == 2 or $item->IdCuenta == 3)
                <td></td>
            @else
                <td></td>
            @endif
            <td>{{ $item->efectivoMovimientos->efectivo->Moneda }}</td>
            <td>{{ $item->Importe or '' }}</td>
        </tr>
    @endforeach
    </tbody>
</table>