<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>API Documentation</title>
  <style>
    /* Estilos para la cabecera */
    header {
      background-color: #222;
      color: #fff;
      padding: 15px;
      text-align: center;
    }

    /* Estilos para el contenedor principal */
    .container {
      display: flex;
      flex-direction: row;
      justify-content: space-between;
      padding: 25px;
      height:475px;
    }

    th{
        font-size:10px;
    }

    /* Estilos para el área de selección de endpoint */
    .endpoint-selection {
      flex: 1;
      background-color: #f4f4f4;
      padding: 20px;
      margin-right: 20px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      height:430px;
    }

    /* Estilos para el área de documentación detallada */
    .detailed-documentation {
      flex: 2;
      background-color: #f9f9f9;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      height:430px;
    }

    /* Estilos para las secciones */
    h2 {
      font-size: 16px;
      margin-bottom: 10px;
      color: #333;
    }

    h2 {
      font-size: 14px;
      margin-bottom: 10px;
      color: #333;
    }


    p {
      line-height: 1.6;
      color: #666;
      font-size: 14px;
    }

    /* Estilos para los enlaces */
    a {
      color: #007bff;
      text-decoration: none;
      font-size: 14px;
    }

    a:hover {
      text-decoration: underline;
    }

    /* Estilos para los títulos en el área de documentación detallada */
    .detailed-documentation h2 {
      font-size: 14px;
      color: #333;
    }

    /* Estilos para los párrafos en el área de documentación detallada */
    .detailed-documentation p {
      font-size: 12px;
      color: #666;
    }

    /* Estilos para la tabla de parámetros */
    .detailed-documentation table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 10px;
    }

    .detailed-documentation th, .detailed-documentation td {
      padding: 5px;
      text-align: left;
      border-bottom: 1px solid #666;
      font-size: 10px;
    }

    .detailed-documentation th {
      background-color: #444;
      color: #fff;
    }

    /* Estilos para el código de respuesta */
    .detailed-documentation pre {
      background-color: #333;
      padding: 10px;
      border-radius: 5px;
      font-size: 14px;
    }

    .detailed-documentation code {
      font-size: 14px;
      color: #fff;
    }
    footer {
      background-color: #000;
      color: #fff;
      padding: 1px;
      text-align: center;
    }

    /* Estilos para los íconos de las redes sociales */
    .social-icons img {
      width: 20px;
      margin: 0 10px;
    }
  </style>
</head>
<body>
  <header>
    <h1>API Documentation</h1>
  </header>
  
  <div class="container">
    <!-- Área de selección de endpoint -->
    <div class="endpoint-selection">
      <h2>ModificarEmpleadoEstadoController</h2>
      <ul>
        <li><a href="#Api/help">POST/</a></li>
      </ul>
    </div>
    
    <!-- Área de documentación detallada -->
    <div class="detailed-documentation">
      <h2 id="endpoint2">POST/</h2>
      <p>Detalles POST/</p>

      <h3 style="font-size:10px;">Response 200:</h3>
      <pre style="font-size:10px;"><code style="font-size:12px;">{
  "status": "success",
  "message": "POST/ executed successfully"
}</code></pre>

      <h3 style="font-size:12px;">Parámetros:</h3>
      <table>
        <thead>
          <tr>
            <th>Nombre</th>
            <th>Tipo</th>
            <th>Descripción</th>
            <th>Requerido</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Codigo Usuario</td>
            <td>string</td>
            <td>se envia le codigo de usuario</td>
            <td>Si</td>
          </tr>
          <tr>
            <td>Nombre Usuario</td>
            <td>String</td>
            <td>se envia el nombre del usuario</td>
            <td>No</td>
          </tr>
          <tr>
            <td>Contraseña Nueva</td>
            <td>String</td>
            <td>Este parametro es opcional</td>
            <td>No</td>
          </tr>
          <tr>
            <td>Estado Usuario</td>
            <td>String</td>
            <td>Este parametro es opacional valores 1 o 0</td>
            <td>No</td>
          </tr>
          <tr>
            <td>Id Usuario</td>
            <td>String</td>
            <td>se envia el Id del usuario administrador</td>
            <td>Si</td>
          </tr>
          <!-- Agrega más filas según sea necesario -->
        </tbody>
      </table>
    </div>
  </div>
  <footer>
    <p style="font-size:10px">Desarrollado por Gean, Johonny y Raul</p>
    <div class="social-icons">
      <img src="{{ asset('linkedin.png')}}" alt="Linkedin">
      <img src="{{ asset('facebook.png')}}" alt="Facebook">
      <img src="{{ asset('whatsapp.png')}}" alt="WhatsApp">
      <!-- Agrega más imágenes según sea necesario -->
    </div>
  </footer>
</body>
</html>
