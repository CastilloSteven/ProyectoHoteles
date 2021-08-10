<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Registre su hotel</h1>
    <form action="../controller/hotelController.php" method="POST">
    <input type="text" name="NomHotel" required placeholder="nombre del hotel"><br>
    <input type="text" name="DirHotel" required placeholder="Direccion  del hotel"><br>
    <input type="text" name="DesHotel" required placeholder="Descripcion del hotel"><br>
    <input type="file" name="ImaHotel" required><br>
    <input type="text" name="IdEnc" required placeholder="Id Encargado"><br>

    <input type="submit" value="Registrar">
</form>
</body>
</html>