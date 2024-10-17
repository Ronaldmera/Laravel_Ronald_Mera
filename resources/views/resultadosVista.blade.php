<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados</title>
    <link rel="stylesheet" href="{{asset('css/style2.css')}}">
</head>
<body>
    <h1>Resultados</h1>
    <div class="contenido">
        <h2>Los valores que ingresaste fueron: </h2>
        <p>Valor de A: {{$valorA}}</p>
        <p>Valor de B: {{$valorB}}</p>
        <p>Valor de C: {{$valorC}}</p>

        <h2>Resultados Fórmula cuadratica:</h2>
        <p>valor general x: {{$x}}</p>
        <p>valor x1 = {{$x1}}</p>
        <p>valor x2 = {{$x2}}</p>
</div>
</body>
</html>