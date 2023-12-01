<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Clientes;
use Illuminate\Http\Request;

class ClientesController extends Controller
{
    public function Listar()
    {
        $query = Clientes::all();
        return $query;
    }
    public function Registrar(Request $request)
    {

        $data = [
            'nombre' => $request->nombre,
            'ap_paterno' => $request->ap_paterno,
            'ap_materno' => $request->ap_materno,
            'email' => $request->email,
            'telefono' => $request->telefono,
            'direccion' => $request->direccion,
        ];

        $query = Clientes::create($data);
        return redirect(route('clientes-index'));
    }

    public function Eliminar(Request $request)
    {
        $query = Clientes::where('id', "=", $request->id)->first();

        Clientes::where('id', "=", $request->id)->delete();
        return redirect(route('clientes-index'));
    }

    public function Editar(Request $request)
    {
        $registro = Clientes::find($request->id);

        if ($registro != null) {
            $registro->nombre = $request->nombre;
            $registro->ap_paterno = $request->ap_paterno;
            $registro->ap_materno = $request->ap_materno;
            $registro->telefono = $request->telefono;
            $registro->email = $request->ap_materno;
            $registro->direccion = $request->direccion;
            $registro->save();
            return redirect(route('clientes-index'));
        }
    }
}
