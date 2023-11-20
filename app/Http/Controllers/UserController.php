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
        if ($validator->fails()) {
            return response([
                'res' => false,
                'msg' => "Todos los campos son necesarios"
            ], 200);
        }
        DB::beginTransaction();
        try {

            $email = DB::table('users')->select('email')->where('email', $request->input('email'))->first();

            if ($email != null) {
                return response([
                    'res' => false,
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
            DB::commit();

            return response([
                'res' => true,
                'msg' => 'Cuenta registrada exitosamente'
            ], 200);
        } catch (Exception $e) {
            DB::rollback();
            return response([
                'res' => false,
                'msg' => $e->getMessage(),
            ], 200);
        }
    }

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
        DB::beginTransaction();

        try {
            $user = DB::table('users')->select('email', 'nombre', 'rol', 'id')->where('email', $request->input('email'))->where('password', md5($request->input('pwd')))->first();

            if ($user === null) {
                return response([
                    'res' => false,
                    'msg' => 'Verifique que la contraseña o el correo existan.'
                ], 200);
            }
            DB::commit();
            return response([
                'res' => true,
                'info' => $user
            ], 200);
        } catch (Exception $e) {
            DB::rollback();
            return response([
                'res' => false,
                'msg' => $e->getMessage()
            ], 200);
        }
    }
}
