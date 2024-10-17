<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>
    <h1>Programa Para Calcular la fórmula cuadrática</h1>
    <div class="contenido">
    <form action="{{route('valores')}}" method="POST">
    @csrf
    <label>Numero A</label>
    <br>
    <input type="number" name="numA" required>
    <br>
    <label>Numero B</label>
    <br>
    <input type="number" name="numB" required>
    <br>
    <label>Numero C</label>
    <br>
    <input type="number" name="numC" required>
    <br><br>
    <button type="submit">Calcular</button>
</form>
</div>

</body>
</html>