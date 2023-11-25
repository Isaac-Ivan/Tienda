<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Cuaderno;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
        if ($validator->fails()) {
            return response([
                'res' => false,
                'msg' => "Todos los elementos son requeridos",
            ], 200);
        }
        DB::beginTransaction();
        try {
            $data = [
                'nombre' => $request->nombre,
                'marca' => $request->marca,
                'precio' => $request->precio,
                'stock' => $request->stock
            ];

            $query = Cuaderno::create($data);
            DB::commit();
            return response([
                'res' => true,
                'msg' => $query->id
            ], 200);
        } catch (Exception $e) {
            DB::rollback();
            return response([
                'res' => false,
                'msg' => $e->getMessage()
            ], 200);
        }
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

        $query = Cuaderno::where('id', "=", $request->id)->first();
        if ($query === null) {
            return response([
                'res' => false,
                'msg' => "Este producto no existe."
            ], 200);
        }

        DB::beginTransaction();
        try {
            Cuaderno::where('id', "=", $request->id)->delete();
            DB::commit();
            return response([
                'res' => true,
                'msg' => "El producto se elimino exitosamente."
            ], 200);
        } catch (Exception $e) {
            DB::rollback();
            return response([
                'res' => false,
                'msg' => $e->getMessage()
            ], 200);
        }
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
            return response([
                'res' => true,
                'msg' => "Registro actualizado correctamente"
            ], 200);
        }

        return response([
            'res' => false,
            'msg' => "No se encontro el registro"
        ], 200);
    }
}
