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
                    <a href="perfilEncargado.php">Mi perfil</a>
                </li>
                <li>
                    <a href="apartadoHoteles.php">Mi Hotel</a>
                </li>
            </ul>
        </nav>
    <form action=""> 
        <div class="hotelSearch">
            <input type="search" class="search" placeholder="   ¿Donde quieres ir?">
            <input type="date" class="fechaI">
            <input type="date" class="fechaF">
            <button type="button" class="btn btn-primary"><b>Buscar</b></button>
        </div>
    </form>
</body>
<footer class="footer">
    <div class="container-footer" id="container-footer">
        <div class="row">
            <div class="footer-col">
                <h4>Compañia</h4>
                    <ul>
                        <li><a href="#">Sobre nosotros</a></li>
                        <li><a href="#">Porque escogernos</a></li>
                        <li><a href="#">Mision</a></li>
                        <li><a href="#">Vision</a></li>
                    </ul>
            </div>
            <div class="footer-col">
                <h4>Ayuda</h4>
                <ul>
                    <li><a href="#">Foro</a></li>
                    <li><a href="#">Preguntas mas comunes</a></li>
                    <li><a href="#">Servicio tecnico</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>Servicio</h4>
                <ul>
                    <li><a href="#">Alojamientos</a></li>
                    <li><a href="#">Busqueda</a></li>
                    <li><a href="#">Reserva</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>Contactenos</h4>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-github"></i></a>
                        <a href="#"><i class="fab fa-whatsapp"></i></a>
                    </div>
            </div>
        </div>
    </div>   
</footer>
</html>