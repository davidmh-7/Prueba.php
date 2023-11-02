<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>

<form action="/dentro" method="POST">
    @csrf
    <label for="consulta">Consulta a la base de datos:</label>
    <input type="text" name="consulta">
    <button type="submit">Consultar</button>
</form>

</form>
    
</body>
</html>