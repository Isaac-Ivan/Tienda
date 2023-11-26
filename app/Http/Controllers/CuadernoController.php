<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Cuaderno;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class CuadernoController extends Controller
{
    public function __construct()
    {
        date_default_timezone_set('America/Mexico_City');
    }
    public function Listar()
    {
        $query = Cuaderno::all();
        return $query;
    }

    public function Registrar(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nombre' => 'required',
            'marca' => 'required',
            'precio' => 'required',
            'stock' => 'required',
        ]);
        $data = [
            'nombre' => $request->nombre,
            'marca' => $request->marca,
            'precio' => $request->precio,
            'stock' => $request->stock
        ];

        $query = Cuaderno::create($data);
        return redirect(route('cuadernos-index'));
    }

    public function Eliminar(Request $request)
    {
        $query = Cuaderno::where('id', "=", $request->id)->first();
        if ($query === null) {
            return response([
                'res' => false,
                'msg' => "Este producto no existe."
            ], 200);
        }
        Cuaderno::where('id', "=", $request->id)->delete();
        return redirect(route('cuadernos-index'));
    }

    public function Editar(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id' => 'required',
            'nombre' => 'required',
            'marca' => 'required',
            'precio' => 'required',
            'stock' => 'required',
        ]);
        if ($validator->fails()) {
            return response([
                'res' => false,
                'msg' => "Todos los campos son necesarios"
            ], 200);
        }

        $registro = Cuaderno::find($request->id);

        if ($registro != null) {
            $registro->nombre = $request->nombre;
            $registro->marca = $request->marca;
            $registro->precio = $request->precio;
            $registro->stock = $request->stock;
            $registro->save();
            return redirect(route('cuadernos-index'));
        }

        return response([
            'res' => false,
            'msg' => "No se encontro el registro"
        ], 200);
    }
}
