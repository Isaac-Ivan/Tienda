<div class="border border-dark-subtle shadow-lg p-3 mb-5 bg-body-tertiary rounded">
    <div class="">
        <h1>Libros</h1>
        <div class="d-flex justify-content-end mb-2">
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal-add-libro">Agregar
                libro</button>
        </div>
    </div>
    <table class="table table-bordered table-responsive">
        <thead>
            <tr>
                <th class="">#</th>
                <th class="col-2">Titulo</th>
                <th class="col-1">Autor</th>
                <th class="col-2">ISBN</th>
                <th class="col-1">Año de publicación</th>
                <th class="col-2">Editorial</th>
                <th class="col-1">Precio</th>
                <th class="col-1">Stock</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($libros as $item => $valor)
                <tr>
                    <th>{{ $item + 1 }}</th>
                    <td>{{ $valor->titulo }}</td>
                    <td>{{ $valor->autor }}</td>
                    <td>{{ $valor->isbn }}</td>
                    <td>{{ $valor->anio_publicacion }}</td>
                    <td>{{ $valor->editorial }}</td>
                    <td>{{ $valor->precio }}</td>
                    <td>{{ $valor->stock }}</td>
                    <td class="">
                        <div class="d-flex">
                            <button type="button" class="btn btn-primary m-1" data-bs-toggle="modal"
                                data-bs-target="#modal{{ $valor->id }}">
                                Editar
                            </button>
                            <form method="POST" action="{{ route('delete-libro') }}">
                            <button type="submit" class="btn btn-danger m-1" type="button">Eliminar
                                    @csrf
                                    <input type="number" id="idInput" name="id" value="{{ $valor->id }}"
                                    style="display: none">
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
                <div class="modal fade modal-lg" id="modal{{ $valor->id }}" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalCenterTitle" aria-bs-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">{{ $valor->titulo }}</h5>
                                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form method="POST" action="{{ route('edit-libro') }}">
                                    @csrf
                                    <div class="row d-flex justify-content-between p-3">
                                        <div class=" col-sm-6">
                                            <div class="mb-3">
                                                <label class="form-label" for="tituloInput">Título</label>
                                                <input type="text" class="form-control " id="tituloInput"
                                                    name="titulo" required value="{{ $valor->titulo }}">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label" for="autorInput">Autor</label>
                                                <input type="text" class="form-control " id="autorInput"
                                                    name="autor" required value="{{ $valor->autor }}">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label" for="isbnInput">ISBN</label>
                                                <input type="tel" class="form-control " id="isbnInput"
                                                    name="isbn" required value="{{ $valor->isbn }}">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label" for="emailInput">Año de publicación</label>
                                                <input type="number" class="form-control " id="anioPublicacionInput"
                                                    name="anio_publicacion" required
                                                    value="{{ $valor->anio_publicacion }}">
                                            </div>
                                        </div>
                                        <div class=" col-sm-6">
                                            <div class="mb-3">
                                                <label class="form-label" for="emailInput">Editorial</label>
                                                <input type="text" class="form-control" id="editorialInput"
                                                    name="editorial" required value="{{ $valor->editorial }}">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label" for="emailInput">Precio</label>
                                                <input type="number" class="form-control " id="precioInput"
                                                    name="precio" required value="{{ $valor->precio }}">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label" for="stockInput">Stock</label>
                                                <input type="number" class="form-control " id="stockInput"
                                                    name="stock" required value="{{ $valor->stock }}">
                                            </div>
                                            <input type="number" class="form-control" id="idInput" name="id"
                                                required value="{{ $valor->id }}" style="display: none">
                                        </div>
                                    </div>

                                    <div class="d-flex justify-content-end me-3">
                                        <button class="btn btn-primary" type="submit">Enviar</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </tbody>
    </table>
</div>
{{-- Modal para registro de libro --}}
<div class="modal fade modal-lg" id="modal-add-libro" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalCenterTitle" aria-bs-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Nuevo libro</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('create-libro') }}">
                    @csrf
                    <div class="row d-flex justify-content-between p-3">
                        <div class=" col-sm-6">
                            <div class="mb-3">
                                <label class="form-label" for="tituloInput">Título</label>
                                <input type="text" class="form-control " id="tituloInputAdd" name="titulo"
                                    required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="autorInput">Autor</label>
                                <input type="text" class="form-control " id="autorInputAdd" name="autor"
                                    required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="isbnInput">ISBN</label>
                                <input type="tel" class="form-control " id="isbnInputAdd" name="isbn"
                                    required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="emailInput">Año de publicación</label>
                                <input type="number" class="form-control " id="anioPublicacionInputAdd"
                                    name="anio_publicacion" required>
                            </div>"
                        </div>
                        <div class=" col-sm-6">
                            <div class="mb-3">
                                <label class="form-label" for="emailInput">Editorial</label>
                                <input type="text" class="form-control" id="editorialInputAdd" name="editorial"
                                    required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="emailInput">Precio</label>
                                <input type="number" class="form-control " id="precioInputAdd" name="precio"
                                    required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="stockInput">Stock</label>
                                <input type="number" class="form-control " id="stockInputAdd" name="stock"
                                    required>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex justify-content-end me-3">
                        <button class="btn btn-primary" type="submit">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
