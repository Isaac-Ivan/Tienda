<div>
    <h1>Proveedores</h1>
    <table class="table table-bordered table-responsive">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Correo</th>
                <th>Teléfono</th>
                <th>Dirección</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($proveedores as $item)
                <tr>
                    <td>{{ $item->nombre }}</td>
                    <td>{{ $item->email }}</td>
                    <td>{{ $item->telefono }}</td>
                    <td>{{ $item->direccion}}</td>
                    <td></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
