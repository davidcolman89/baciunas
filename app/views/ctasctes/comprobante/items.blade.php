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
            <td>{{$item['tipoCuenta']}}</td>
            <td>{{$item['contenido']}}</td>
            <td>{{$item['moneda']}}</td>
            <td>{{$item['importe']}}</td>
        </tr>
    @endforeach
    </tbody>
</table>