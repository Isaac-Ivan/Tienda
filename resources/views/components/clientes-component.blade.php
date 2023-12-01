<div class="border border-dark-subtle shadow-lg p-3 mb-5 bg-body-tertiary rounded">
    <h1>Clientes</h1>
    <div class="d-flex justify-content-end mb-2">
        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal-add-cliente">Agregar</button>
    </div>
    <table class="table table-bordered table-responsive">
        <thead>
            <tr>
                <th class="">#</th>
                <th class="col-2">Nombre</th>
                <th class="col-1">Apellido Paterno</th>
                <th class="col-1">Apellido Materno</th>
                <th class="col-1">Correo</th>
                <th class="col-2">Teléfono</th>
                <th class="col-1">Dirección</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($clientes as $item => $valor)
                <tr>
                    <th>{{ $item + 1 }}</th>
                    <td>{{ $valor->nombre }}</td>
                    <td>{{ $valor->ap_paterno }}</td>
                    <td>{{ $valor->ap_materno }}</td>
                    <td>{{ $valor->email }}</td>
                    <td>{{ $valor->telefono }}</td>
                    <td>{{ $valor->direccion }}</td>
                    <td class="">
                        <div class="d-flex">
                            <button type="button" class="btn btn-primary m-1" data-bs-toggle="modal"
                                data-bs-target="#modal{{ $valor->id }}">
                                Editar
                            </button>
                            <form method="POST" action="{{ route('delete-cliente') }}">
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
                                <form method="POST" action="{{ route('edit-cliente') }}">
                                    @csrf
                                    <div class="row d-flex justify-content-between p-3">
                                        <div class=" col-sm-6">
                                            <div class="mb-3">
                                                <label class="form-label" for="nombreInput">Nombre(s)</label>
                                                <input type="text" class="form-control " id="nombreInput"
                                                    name="nombre" value="{{$valor->nombre}}" required>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label" for="apPaternoInput">Apellido Paterno</label>
                                                <input type="text" class="form-control " id="apPaternoInput"
                                                    name="ap_paterno" required value="{{$valor->ap_paterno}}">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label" for="apMaternoInput">Apellido Materno</label>
                                                <input type="text" class="form-control " id="apMaternoInput"
                                                    name="ap_materno" required value="{{$valor->ap_materno}}">
                                            </div>
                                        </div>
                                        <div class=" col-sm-6">
                                            <div class="mb-3">
                                                <label class="form-label" for="emailInput">Correo</label>
                                                <input type="email" class="form-control " id="emaiñInput"
                                                    name="email" required value="{{$valor->email}}">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label" for="TelefonoInput">Teléfono</label>
                                                <input type="tel" class="form-control " id="TelefonoInput"
                                                    name="telefono" required value="{{$valor->telefono}}">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label" for="direccionInput">Dirección</label>
                                                <input type="text" class="form-control " id="direccionInput"
                                                    name="direccion" required value="{{$valor->direccion}}">
                                            </div>
                                            <input type="number" class="form-control" id="idInput" name="id"
                                            required value="{{ $valor->id }}" style="display: none">
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




{{-- Modal registro de cliente --}}
<div class="modal fade modal-lg" id="modal-add-cliente" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalCenterTitle" aria-bs-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Nuevo cliente</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('create-clientes') }}">
                    @csrf
                    <div class="row d-flex justify-content-between p-3">
                        <div class=" col-sm-6">
                            <div class="mb-3">
                                <label class="form-label" for="nombreInput">Nombre(s)</label>
                                <input type="text" class="form-control " id="nombreInput" name="nombre"
                                    required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="apPaternoInput">Apellido Paterno</label>
                                <input type="text" class="form-control " id="apPaternoInput" name="ap_paterno"
                                    required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="apMaternoInput">Apellido Materno</label>
                                <input type="text" class="form-control " id="apMaternoInput" name="ap_materno"
                                    required>
                            </div>
                        </div>
                        <div class=" col-sm-6">
                            <div class="mb-3">
                                <label class="form-label" for="emailInput">Correo</label>
                                <input type="email" class="form-control " id="emaiñInput" name="email" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="TelefonoInput">Teléfono</label>
                                <input type="tel" class="form-control " id="TelefonoInput" name="telefono"
                                    required>
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
{{-- @foreach ($clientes as $i => $item)
<h3>{{$item->nombre}}</h3>
@endforeach --}}
