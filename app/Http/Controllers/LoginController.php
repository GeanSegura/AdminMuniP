<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use DB;

class LoginController extends Controller
{
    public function authenticate(Request $request)
    {
        $vc_codigo = $request->input('username');
        $vc_contrasena = $request->input('password');

        // Llamar al procedimiento almacenado para validar el usuario
        $result = DB::selectOne('CALL validar_usuario(?, ?, @resultado)', [$vc_codigo, $vc_contrasena]);

        // Obtener el resultado del procedimiento almacenado
        $resultado = DB::selectOne('SELECT @resultado AS resultado')->resultado;

        if ($resultado == 1) {
            // Usuario válido, redirigir a login2.blade.php
            return view('administradorPortal');
        } else {
            $error = 'Credenciales incorrectas';
            return view('PortalMuni')->with('error', $error);
        }
    }
}
