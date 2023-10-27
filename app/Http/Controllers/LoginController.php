<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use League\CommonMark\Extension\Table\Table;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $request->input('email');
        $request->input('pwd');

        $validator = Validator::make($request->all(), [
            'email' => 'required',
            'pwd' => 'required',
        ]);


        if ($validator->fails()) {
            return response([
                'res' => 'false',
                'msg' => 'Todos los campos son requeridos.'
            ], 200);
        }

        try {
            $user = DB::table('users')->select('correo', 'nombre', 'apellido_paterno', 'apellido_paterno', 'telefono', 'rol', 'iduser')->where('correo', $request->input('email'))->where('password', md5($request->input('pwd')))->first();

            if ($user === null) {
                return response([
                    'res' => 'false',
                    'msg' => 'Verifique que la contraseña o el correo existan.'
                ], 200);
            }

            return response([
                'res' => 'true',
                'msg' => $user->correo,
                'info'=> $user
            ], 200);
        } catch (Exception $e) {
            return response([
                'res' => false,
                'msg' => $e->getMessage()
            ], 200);
        }
    }
}
