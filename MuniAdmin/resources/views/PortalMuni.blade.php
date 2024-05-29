<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de inicio de sesión</title>
    <style>
        /* Estilos para el diseño */
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
            flex-direction: row;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            width: 1000px; /* Ancho del contenedor */
            height: 600px;
        }
        .left {
            flex: 1;
            padding: 70px;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color:mediumseagreen;
        }
        .left img {
            max-width: 100%;
            max-height: 100%;
        }
        .right {
            flex: 1;
            padding: 20px;
            background-color: #fff;
            padding-top: 70px;
        }
        .right h2 {
            margin-top: 0;
        }
        .right form {
            margin-top: 20px;
            width: 100%; /* Ancho del formulario */
        }
        .right form label,
        .right form input,
        .right form button {
            width: 78%; /* Ancho de los elementos del formulario */
            margin-bottom: 10px;
            
        }
        /* Estilos para hacer responsive el diseño */
        @media (max-width: 768px) {
            .container {
                flex-direction: column;
                width: 100%;
            }
            .right {
                border-top: 1px solid #ddd;
                background-color: #fff;
            }
        }
        img {

            border-radius: 40px;
        }

        body {
  font-family: Arial, sans-serif;
}

.login-container {
  max-width: 400px;
  margin: 0 auto;
  padding: 20px;
  background-color: #fff; /* verde claro */
}

.login-form {
  margin-bottom: 20px;
}

.form-group {
  margin-bottom: 15px;
  padding-left: 30px;
  padding-right: 40px;
}

.form-group label {
  display: block;
  margin-bottom: 5px;
}

.form-group input {
  width: 80%;
  padding: 8px;
  border: 1px solid #ccc;
}

.form-group input[type="text"],
.form-group input[type="password"] {
  padding-left: 30px;
}

.form-group button {
  padding: 10px 20px 10px 10px;
  background-color: #28a745; /* verde oscuro */
  color: white;
  border: none;
  cursor: pointer;
  margin-left: 20px;
  border-radius: 5px;

}

.password-recovery {
  text-align: center;
}

.password-recovery a {
  color: #007bff; /* azul */
  font-size: 12px;
  margin-left: -42px;
 
}

#titleIniciarSesion{

    padding-left: 118px;
    font-family: 'Times New Roman', Times, serif;
    font-weight: lighter;
}

#password{
  background-image: url("contrasena-img.png");
  background-size: 15px; 
        background-position: 5px center; 
        background-repeat: no-repeat;
        padding-left: 30px; 
}

#username {
  background-image: url("usuario.png");
  background-size: 15px; 
        background-position: 5px center; 
        background-repeat: no-repeat;
        padding-left: 30px; 
}


    </style>
</head>
<body>
    <div class="container">
        <div class="left">
            <img src="MPH.jpeg" alt="Imagen">
        </div>
        <div class="right">
            <h2 id="titleIniciarSesion">Iniciar sesión</h2>
            <form action="tu_script_de_procesamiento.php" method="post">
                <div class="login-container">
                    
                    <form class="login-form" action="#" method="post">
                      <div class="form-group">
                      
                        <input type="text" id="username" name="username" placeholder="Usuario">
                      </div>
                      <div class="form-group">
                     
                        <input type="password" id="password" name="password" placeholder="Contraseña">
                        <span class="password-toggle">&#x1F441;</span>
                      </div>
                      <div class="form-group">
                        <button id="buttonIniciarSesion" type="submit">Iniciar sesión</button>
                      </div>
                    </form>
                    <div class="password-recovery">
                      <a href="#">¿Olvidaste tu contraseña?</a>
                    </div>
                  </div>
                  
            </form>
        </div>
    </div>
    <script>
      const passwordField = document.getElementById('password');
      const passwordToggle = document.querySelector('.password-toggle');

      passwordToggle.addEventListener('click', function () {
          const type = passwordField.getAttribute('type') === 'password' ? 'text' : 'password';
          passwordField.setAttribute('type', type);
          this.textContent = type === 'password' ? '\uD83D\uDC41' : '\uD83D\uDD13';
      });
  </script>
</body>
</html>
