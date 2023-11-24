<div>
    <div class="d-flex justify-content-end">
        <button class="btn" name="btn-cancel">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-x-circle"
                viewBox="0 0 16 16">
                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                <path
                    d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
            </svg>
        </button>
    </div>
    <h1>Inventarios</h1>
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
