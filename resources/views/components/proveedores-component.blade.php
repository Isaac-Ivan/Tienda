<div class="border border-dark-subtle shadow-lg p-3 mb-5 bg-body-tertiary rounded">
    <h1>Proveedores</h1>
    <div class="d-flex justify-content-end mb-2">
        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal-add-proveedor">Agregar
            proveedor</button>
    </div>
    <table class="table table-bordered table-responsive">
        <thead>
            <tr>
                <th>#</th>
                <th>Nombre</th>
                <th>Correo</th>
                <th>Teléfono</th>
                <th>Dirección</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($proveedores as $i => $item)
                <tr>
                    <td>{{ $i + 1 }}</td>
                    <td>{{ $item->nombre }}</td>
                    <td>{{ $item->email }}</td>
                    <td>{{ $item->telefono }}</td>
                    <td>{{ $item->direccion }}</td>
                    <td>
                        <div class="d-flex">
                            <button type="button" class="btn btn-primary m-1" data-bs-toggle="modal"
                                data-bs-target="#modal{{ $item->id }}">
                                Editar
                            </button>
                            <form method="POST" action="{{ route('delete-proveedor') }}">
                                <button type="submit" class="btn btn-danger m-1" type="button">Eliminar
                                    @csrf
                                    <input type="number" id="idInput" name="id" value="{{ $item->id }}"
                                        style="display: none">
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>

                <div class="modal fade modal-lg" id="modal{{ $item->id }}" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalCenterTitle" aria-bs-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Proveedor: {{ $item->nombre }}</h5>
                                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form method="POST" action="{{ route('edit-proveedor') }}">
                                    @csrf
                                    <div class="row d-flex justify-content-between p-3">
                                        <div class=" col-sm-6">
                                            <div class="mb-3">
                                                <label class="form-label" for="nombreInput">Nombre</label>
                                                <input type="text" class="form-control " id="nombreInput"
                                                    name="nombre" required value="{{ $item->nombre }}">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label" for="emailInput">Correo</label>
                                                <input type="email" class="form-control " id="emailInput"
                                                    name="email" required value="{{ $item->email }}">
                                            </div>
                                        </div>
                                        <div class=" col-sm-6">
                                            <div class="mb-3">
                                                <label class="form-label" for="telefonoInput">Teléfono</label>
                                                <input type="tel" class="form-control " id="telefonoInput"
                                                    name="telefono" required value="{{ $item->telefono }}">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label" for="direccionInput">Dirección</label>
                                                <input type="text" class="form-control " id="direccionInput"
                                                    name="direccion" required value="{{ $item->direccion}}">
                                            </div>
                                            <input type="number" class="form-control" id="idInput" name="id"
                                                required value="{{ $item->id }}" style="display: none">
                                        </div>
                                        <div class="d-flex justify-content-end me-3">
                                            <button class="btn btn-primary" type="submit">Enviar</button>
                                        </div>
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
<div class="modal fade modal-lg" id="modal-add-proveedor" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalCenterTitle" aria-bs-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Nuevo cuaderno</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('create-proveedor') }}">
                    @csrf
                    <div class="row d-flex justify-content-between p-3">
                        <div class=" col-sm-6">
                            <div class="mb-3">
                                <label class="form-label" for="nombreInput">Nombre</label>
                                <input type="text" class="form-control " id="nombreInput" name="nombre"
                                    required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="correoInput">Correo</label>
                                <input type="email" class="form-control " id="emailInput" name="email" required>
                            </div>
                        </div>
                        <div class=" col-sm-6">
                            <div class="mb-3">
                                <label class="form-label" for="telefonoInput">Teléfono</label>
                                <input type="tel" class="form-control " id="telefonoInput"
                                    name="telefono"required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="direccionInput">Dirección</label>
                                <input type="text" class="form-control " id="direccionInput" name="direccion"
                                    required>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end me-3">
                            <button class="btn btn-primary" type="submit">Enviar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
