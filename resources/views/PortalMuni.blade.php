<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de inicio de sesión</title>
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
            flex-direction: row;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            width: 1000px;
            height: 600px;
        }
        .left {
            flex: 1;
            padding: 70px;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: mediumseagreen;
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
            width: 100%;
        }
        .right form label,
        .right form input,
        .right form button {
            width: 78%;
            margin-bottom: 10px;
        }
        @media (max-width: 768px) {
            .container {
                flex-direction: column;
                width: 100%;
            }
            .right {
                border-top: 1px solid #ddd;
                background-color: #fff;
                padding-top: 20px;
            }
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
            <form action="{{ route('login') }}" method="post">
                @csrf
                <div class="login-container">
                    <div class="form-group">
                        <input type="email" id="email" name="email" placeholder="Email" required>
                    </div>
                    <div class="form-group">
                        <input type="password" id="password" name="password" placeholder="Contraseña" required>
                        <span class="password-toggle">&#x1F441;</span>
                    </div>
                    <div class="form-group">
                        <button id="buttonIniciarSesion" type="submit">Iniciar sesión</button>
                    </div>
                </div>
                <div class="password-recovery">
                    <a href="#">¿Olvidaste tu contraseña?</a>
                </div>
                @if(session('error'))
                    <span class="text-danger">{{ session('error') }}</span>
                @endif
            </form>
        </div>
    </div>
    <script>
        const passwordField = document.getElementById('password');
        const passwordToggle = document.querySelector('.password-toggle');

        passwordToggle.addEventListener('click', function () {
            const type = passwordField.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordField.setAttribute('type', type);
            this.textContent = type === 'password' ? '👁️' : '🔒';
        });
    </script>
</body>
</html>