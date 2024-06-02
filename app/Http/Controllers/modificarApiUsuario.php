<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class modificarApiUsuario extends Controller
{
   
    public function ModificarEstadoEmpleado(Request $request)
    {
        $data = $request->all();

        // Recorrer cada objeto JSON enviado
        foreach ($data as $usuario) {
            $nombre = $usuario['Codigo Usuario'];
            $descripcion = $usuario['Nombre Usuario'];
            $completado = $usuario['Contraseña Nueva'];
            $var1 = $usuario['Estado Usuario'];
            $id_usuario = $usuario['Id Usuario'];
            
            // Ejecutar el procedimiento almacenado para cada objeto
            try {
                DB::statement('EXEC SP_INTERMEDIA_INSERTAR_DATOS_USUARIO ?, ?, ?, ?,?', [$nombre, $descripcion, $completado,$var1,$id_usuario]);
            } catch (\Exception $e) {
                // Manejar cualquier excepción aquí
                // Por ejemplo, podrías registrar el error o devolver un mensaje de error personalizado
                return response()->json([
                    'error' => 'Error al insertar datos: ' . $e->getMessage()
                ], 500);
            }
        }
        
        // Devolver una respuesta exitosa si todo salió bien
        return response()->json([
            'message' => 'Datos insertados correctamente en el procedimiento almacenado.'
        ]);
    }
}
