<div>
    <h1>Libros</h1>
    <table class="table table-bordered table-responsive">
        <thead>
            <tr>
                <th>Titulo</th>
                <th>Autor</th>
                <th>ISBN</th>
                <th>Año de publicación</th>
                <th>Editorial</th>
                <th>Precio</th>
                <th>Stock</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($libros as $item)
                <tr>
                    <td>{{ $item->titulo }}</td>
                    <td>{{ $item->autor }}</td>
                    <td>{{ $item->isbn }}</td>
                    <td>{{ $item->anio_publicacion }}</td>
                    <td>{{ $item->editorial }}</td>
                    <td>{{ $item->precio }}</td>
                    <td>{{ $item->stock }}</td>
                    <td></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
