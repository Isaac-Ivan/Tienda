<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Libros;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class LibrosController extends Controller
{
    public function __construct()
    {
        date_default_timezone_set('America/Mexico_City');
    }

    public function Listar()
    {
        $query = Libros::all();
        return $query;
    }
    public function Registrar(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'titulo' => 'required',
            'autor' => 'required',
            'isbn' => 'required',
            'anio_publicacion' => 'required',
            'editorial' => 'required',
            'precio' => 'required',
            'stock' => 'required',
        ]);

        $data = [
            'titulo' => $request->titulo,
            'autor' => $request->autor,
            'isbn' => $request->isbn,
            'anio_publicacion' => $request->anio_publicacion,
            'editorial' => $request->editorial,
            'precio' => $request->precio,
            'stock' => $request->stock,
        ];
        $query = Libros::create($data);
        return redirect(route('libros-index'));
    }

    public function Eliminar(Request $request)
    {
        $query = Libros::where('id', "=", $request->id)->first();
        if ($query === null) {
            return response([
                'res' => false,
                'msg' => "Este producto no existe."
            ], 200);
        }
        Libros::where('id', "=", $request->id)->delete();
        return redirect(route('libros-index'));
    }


    public function Editar(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'ids' => 'required',
            'titulo' => 'required',
            'autor' => 'required',
            'isbn' => 'required',
            'anio_publicacion' => 'required',
            'editorial' => 'required',
            'precio' => 'required',
            'stock' => 'required',
        ]);
        // if ($validator->fails()) {
        //     return response([
        //         'res' => false,
        //         'msg' => "Todos los campos son necesarios"
        //     ], 200);
        // }
        $registro = Libros::find($request->id);
        if ($registro != null) {
            $registro->titulo = $request->titulo;
            $registro->autor = $request->autor;
            $registro->isbn = $request->isbn;
            $registro->anio_publicacion = $request->anio_publicacion;
            $registro->editorial = $request->editorial;
            $registro->precio = $request->precio;
            $registro->stock = $request->stock;
            $registro->save();
            return redirect(route('libros-index'));
        }
    }
}
