<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">

    <!-- Responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Alojamientos</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    
    <!-- Font Awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link rel="shortcut icon" href="assets/iconos/favicon.ico" type="image/x-icon">
</head>
<body>
    <div class="container">
        <nav class="nav-main">
            <img src="../../assets/images/logo.png" alt="Logo" class="nav-logo">
        </nav>
    </div>   
    <div class="banner">
        <div class="text">
            <h1>Alojamientos en Bogotá</h1>
            <p>Los mejores alojamientos que puedes encontrar en la capital de Colombia</p>
        </div>
    </div>
        <div class="row-img">
            <tr>
                <td>
                    <img src="../../assets/images/hotel1.jpg" alt="Hotel1">
                </td>
                <td>
                    <img src="../../assets/images/hotel2.jpg" alt="Hotel2">
                </td>
                <td>
                    <img src="../../assets/images/hotel3.jpg" alt="Hotel3">
                </td>
            </tr>
        </div>  
        <div class="container">
        <nav class="nav-main">
            <ul class="nav-menu">
                <li>
                    <a href="perfil.php">Mi perfil</a>
                </li>
                <li>
                    <a href="">Mi Hotel</a>
                </li>
            </ul>
        </nav>
        <a href="addHotel.php"><button>Ingresar Hotel</button></a>
        <a href=""><button>Editar Hotel</button></a>
        
        <table border='1'>
            <tr>
            <th>id</th>
            <th>nombre</th>
            <th>direccion</th>
            <th>descripcion</th>
            <th>imagen</th>
            </tr>
            <?php
                include '../controller/conexion.php';

                $hotel = "SELECT Id_Hotel, Nombre_Hotel, Direccion_Hotel, Descripcion_Hotel, Imagen_Hotel FROM Hotel;";

        $execute = mysqli_query($conexion, $hotel);

        while($dato = mysqli_fetch_array($execute)){
            ?>
            <tr>
                <td><?php echo $dato['Id_Hotel'] ?></td>
                <td><?php echo $dato['Nombre_Hotel'] ?></td>
                <td><?php echo $dato['Direccion_Hotel'] ?></td>
                <td><?php echo $dato['Descripcion_Hotel'] ?></td>
                <td><?php echo $dato['Imagen_Hotel'] ?></td>
            </tr>
        <?php
        }

        ?>
        </table>
</body>

</html>