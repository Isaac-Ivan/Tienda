<div>
    <h1>Cuadernos</h1>
    <table class="table table-bordered table-responsive">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Marca</th>
                <th>Precio</th>
                <th>Stock</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cuadernos as $item)
                <tr>
                    <td>{{ $item->nombre }}</td>
                    <td>{{ $item->marca }}</td>
                    <td>{{ $item->precio }}</td>
                    <td>{{ $item->stock }}</td>
                    <td></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
