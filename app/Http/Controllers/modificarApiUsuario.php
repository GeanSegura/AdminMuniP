<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDO;
use PDOException;

use DB;

class modificarApiUsuario extends Controller
{
   
    public function ModificarEstadoEmpleado(Request $request)
    {
        try {
            // Obtener los datos enviados en la solicitud
            $data = $request->all();
    
            // Verificar si se enviaron datos
            if (empty($data)) {
                return response()->json([
                    'error' => 'No se proporcionaron datos.'
                ], 400);
            }
    
            // Verificar si el objeto JSON es un array
            if (is_array($data)) {
                // Recorrer cada objeto JSON enviado
                foreach ($data as $usuario) {
                    // Verificar si la estructura del objeto JSON es válida
                    if (!isset($usuario['Codigo Usuario']) || !isset($usuario['Nombre Usuario']) || !isset($usuario['Contraseña Nueva']) || !isset($usuario['Estado Usuario']) || !isset($usuario['Id Usuario'])) {
                        return response()->json([
                            'error' => 'La estructura JSON es inválida. Todos los campos son requeridos.'
                        ], 400);
                    }
    
                    // Acceder a los campos JSON correctamente
                    $nombre = $usuario['Codigo Usuario'];
                    $descripcion = $usuario['Nombre Usuario'];
                    $completado = $usuario['Contraseña Nueva'];
                    $var1 = $usuario['Estado Usuario'];
                    $id_usuario = $usuario['Id Usuario'];
    
                    // Ejecutar el procedimiento almacenado
                    DB::statement('CALL sp_procesar_usuarios_intermedia(?, ?, ?, ?, ?)', [
                        $nombre,
                        $descripcion,
                        $completado,
                        $var1,
                        $id_usuario
                    ]);
                }
            } else {
                // Acceder directamente a los campos del JSON
                $nombre = $data['Codigo Usuario'];
                $descripcion = $data['Nombre Usuario'];
                $completado = $data['Contraseña Nueva'];
                $var1 = $data['Estado Usuario'];
                $id_usuario = $data['Id Usuario'];
    
                // Ejecutar el procedimiento almacenado
                DB::statement('CALL sp_procesar_usuarios_intermedia(?, ?, ?, ?, ?)', [
                    $nombre,
                    $descripcion,
                    $completado,
                    $var1,
                    $id_usuario
                ]);
            }
    
            // Devolver una respuesta exitosa si todo salió bien
            return response()->json([
                'message' => 'Datos insertados correctamente en el procedimiento almacenado.'
            ]);
        } catch (\Exception $e) {
            // Manejar cualquier excepción aquí
            // Por ejemplo, podrías registrar el error o devolver un mensaje de error personalizado
            return response()->json([
                'error' => 'Error al insertar datos: ' . $e->getMessage()
            ], 500);
        }
    }
    
    
}
