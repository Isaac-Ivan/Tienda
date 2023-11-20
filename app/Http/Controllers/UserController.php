<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\UserRegister;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function Register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required',
            'pwd' => 'required',
            'nombre' => 'required',
            'rol' => 'required',
        ]);
        try {

            $email = DB::table('users')->select('email')->where('email', $request->input('email'))->first();

            if ($email != null) {
                return response([
                    'res' => 'false',
                    'msg' => 'El correo ya se encuentra registrado'
                ], 200);
            }

            $data = [
                'email' => $request->email,
                'password' => md5($request->pwd),
                'nombre' => $request->nombre,
                'rol' => $request->rol
            ];

            $query = UserRegister::create($data);
            return response([
                'res' => 'true',
                'msg' => 'Cuenta registrada exitosamente'
            ], 200);
        } catch (Exception $e) {
            return response([
                'res' => 'false',
                'msg' => $e->getMessage(),
            ], 200);
        }
    }
}
