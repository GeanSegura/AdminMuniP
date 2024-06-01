<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
    <link rel="stylesheet" href="styles.css">

    <style>
        body {
    font-family: Arial, sans-serif;
}

.container {
    max-width: 400px;
    margin: 50px auto;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

h2 {
    text-align: center;
}

input[type="number"], input[type="text"], button {
    width: 50%;
    margin-bottom: 10px;
    padding: 10px;
    box-sizing: border-box;
}

.buttons {
    display: flex;
}

.buttons button {
    flex: 1;
    margin-right: 5px;
}

.buttons button:last-child {
    margin-right: 0;
}

    </style>
</head>
<body>
    <div class="container">
        <h2>Calculadora</h2>
        <form id="calculator-form" action="/calculadora" method="post">
        @csrf
            <input type="number" name="numero1" id="numero1" placeholder="Ingrese el primer número" required>
            <input type="number"  name="numero2" id="numero2" placeholder="Ingrese el segundo número" required>
            <div class="buttons">
                <button type="button" onclick="sumar()">Dividir</button>
                <button type="button" onclick="restar()">Restar</button>
                <button type="button" onclick="multiplicar()">Multiplicar</button>
                <button type="submit">Sumar</button>
            </div>
            <input type="text" name="resultado" placeholder="Resultado" value="{{ $resultado ?? '' }}" readonly>
        </form>
    </div>
    <script src="script.js"></script>
</body>
</html>
