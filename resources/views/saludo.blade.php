<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saludo</title>
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
    <h1> Hola {{ $firstName }} {{ $lastName }} </h1>
    <p> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Inventore consequuntur natus
        officiis incidunt nam qui ab! Sunt veniam cumque id aliquam vel eum suscipit architecto, 
        culpa vero neque voluptates corrupti!</p>
</body>
</html>