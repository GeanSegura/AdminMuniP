<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f0f0f0;
        }

        .container {
            display: flex;
            flex-direction: column;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            width: 1000px;
            height: 600px; /* Ajustar la altura del contenedor */
        }

        .header {
            background-color: #4CAF50;
            display: flex;
            align-items: center;
            padding: 20px;
            border: solid white 4px;
        }

        .header-left img {
            height: 80px; /* Ajustar la altura de la imagen */
        }

        .header-right {
            margin-left: auto;
            display: flex;
            align-items: center;
        }

        .header-right img {
            border-radius: 50%;
            height: 50px; /* Ajustar el tamaño de la foto de perfil */
            width: 50px;
            margin-left: 20px;
        }

        .header-right .user-info {
            text-align: right;
            margin-right: 10px;
        }

        .content {
            display: flex;
            flex-direction: row;
            flex-grow: 1;
        }

        .left {
            background-color: #4CAF50;
            width: 200px;
            padding: 20px;
            box-sizing: border-box;
            border: solid white 4px;
        }

        .left ul {
            list-style-type: none;
            padding: 0;
        }

        .left ul li {
            margin: 10px 0;
            cursor: pointer;
            color: white;
        }

        .right {
            flex-grow: 1;
            padding: 20px;
            box-sizing: border-box;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        .icon {
            cursor: pointer;
        }
        
        #muniHCabecera{
            height:80px;
            width: 380px;
        }

         /* Estilos para el botón */
         button {
            background-color: #4CAF50; /* Color de fondo verde */
            color: white; /* Color del texto blanco */
            border: none;
            padding: 10px 20px; /* Ajustar el espaciado del botón */
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s; /* Transición suave al pasar el ratón */
        }

        button:hover {
            background-color: #45a049; /* Cambiar el color de fondo al pasar el ratón */
        }


    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <div class="header-left">
                <img id="muniHCabecera" src="municipalidadHuancayoHeader.jpg" alt="Header Image">
            </div>
            <div class="header-right">
                <div class="user-info">
                    <p>Nombre de Usuario</p>
                    <p>email@ejemplo.com</p>
                </div>
                <img src="https://via.placeholder.com/50" alt="Foto de Perfil">
            </div>
        </div>
        <div class="content">
            <div class="left">
                <ul>
                    <li>Administrar Usuario</li>
                </ul>
            </div>
            <div class="right">
            <form action="{{ route('login') }}" method="GET">
            <label for="busqueda">Buscar usuario:</label>
                    <input type="text" id="busqueda" name="busqueda">
                    <button type="submit">Buscar</button> <!-- Aplicamos estilos al botón -->
        <table style="margin-top:20px;">
    <thead>
        <tr>
            <th>Usuario</th>
            <th>Contraseña</th>
            <th>Estado</th>
            <th>Acciones</th>
        </tr>
    </thead>
    @isset($usuarios)
        @foreach ($usuarios as $usuario)
            <tr>
                <td>{{ $usuario->vc_nombre }}</td>
                <td>{{ $usuario->vc_contrasena }}</td>
                <td>{{ $usuario->vc_estado_registro }}</td>
       
                <td>
                                        <form action="{{ route('login') }}" method="POST" style="display: inline;">
                                            @csrf
                                            <input type="hidden" name="nombre" value="{{ $usuario->vc_nombre }}">
                                            <button type="submit" style="background: none; border: none; cursor: pointer;">
                                                <span class="icon">🗑️</span>
                                            </button>
                                        </form>
                                        <span class="icon">✏️</span>
                                        <span class="icon">➕</span>
                                    </td>
                                   
            
            </tr>
        @endforeach
    @endisset
</table>
    </form>
                
            </div>
        </div>
    </div>
</body>
</html>
