<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operaciones</title>
</head>
<style>
   body {
        font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
        background-color: #f8f8f8;
        color: #333;
        text-align: justify;
    }

    h1 {
        font-size: 24px;
        font-weight: bold;
        margin: 20px 0;
    }

    p {
        font-size: 16px;
        line-height: 1.5;
    }
</style>

<body>
    <h1>Operaciones</h1>
    <p>La suma de {{ $num1 }} + {{ $num2 }} es: {{ $num1 + $num2 }}</p>
    <p>La resta de {{ $num1 }} - {{ $num2 }} es: {{ $num1 - $num2 }}</p>
    <p>La multiplicación de {{ $num1 }} * {{ $num2 }} es: {{ $num1 * $num2 }}</p>
    <p>La división de {{ $num1 }} / {{ $num2 }} es: {{ $num1 / $num2 }}</p>
</body>
</html>