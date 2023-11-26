<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Proveedores;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class ProveedoresController extends Controller
{
    public function __construct()
    {
        date_default_timezone_set('America/Mexico_City');
    }
    public function Registrar(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nombre' => 'required',
            'email' => 'required',
            'telefono' => 'required',
            'direccion' => 'required',
        ]);

        if ($validator->fails()) {
            return response([
                'res' => false,
                'msg' => "Todos los elementos son requeridos",
            ], 200);
        }

        $data = [
            'nombre' => $request->nombre,
            'email' => $request->email,
            'telefono' => $request->telefono,
            'direccion' => $request->direccion,
        ];

        $query = Proveedores::create($data);
        return redirect(route('proveedores-index'));
    }
    public function Listar()
    {
        $query = Proveedores::all();
        return $query;
    }
    public function Editar(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id' => 'required',
            'nombre' => 'required',
            'email' => 'required',
            'telefono' => 'required',
            'direccion' => 'required',
        ]);
        if ($validator->fails()) {
            return response([
                'res' => false,
                'msg' => "Todos los campos son necesarios"
            ], 200);
        }

        $registro = Proveedores::find($request->id);

        if ($registro != null) {
            $registro->nombre = $request->nombre;
            $registro->email = $request->email;
            $registro->telefono = $request->telefono;
            $registro->direccion = $request->direccion;
            $registro->save();
            return redirect(route('proveedores-index'));
        }

        return response([
            'res' => false,
            'msg' => "No se encontro el registro"
        ], 200);
    }
    public function Eliminar(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id' => 'required',
        ]);
        if ($validator->fails()) {
            return response([
                'res' => false,
                'msg' => "El id es necesario."
            ], 200);
        }

        $query = Proveedores::where('id', "=", $request->id)->first();
        if ($query === null) {
            return response([
                'res' => false,
                'msg' => "El proveedor no existe."
            ], 200);
        }
        Proveedores::where('id', "=", $request->id)->delete();

        return redirect(route('proveedores-index'));
    }
}
