<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\UserRegister;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function Register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'correo' => 'required',
            'pwd' => 'required',
            'nombre' => 'required',
        ]);

        $email = DB::table('users')->select('correo')->where('correo', $request->input('correo'))->first();

        if ($email != null) {
            return response([
                'res' => 'false',
                'msg' => 'El correo ya se encuentra registrado'
            ], 200);
        }

        $data = [
            'correo' => $request->correo,
            'password' => md5($request->password),
            'nombre' => $request->nombre,
            'rol' => $request->rol
        ];


        $query = UserRegister::create($data);


        return response([
            'res' => 'true',
            'msg' => 'Cuenta registrada exitosamente'
        ], 200);
    }
}
