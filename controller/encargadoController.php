<?php

    include 'conexion.php';

    
        $NomEnc=$_POST['nomEnc'];
        $ApeEnc=$_POST['ApeEnc'];
        $FecNacEnc=$_POST['FecNacEnc'];
        $TelEnc=$_POST['TelEnc'];
        $NumDocEnc=$_POST['NumDocEnc'];
        $CorEnc=$_POST['CorEnc'];
        $ConEnc=$_POST['ConEnc'];
        $TipoDoc=$_POST['TipoDoc'];


        $query = "CALL crearEncargado ('$NomEnc', '$ApeEnc', '$FecNacEnc', '$TelEnc', '$NumDocEnc','$CorEnc', '$ConEnc', '$TipoDoc');";

    $execute = mysqli_query($conexion, $query);

    if($execute){
        echo '
        <script>
            alert("Usuario registrado exitosamente");
            window.location = "../view/indexEncargado.php";
        </script>        
        ';
    }else{
        echo '
        <script>
            alert("Error al registrar, intentalo de nuevo");
            window.location = "../view/login.php";
        </script>        
        ';
    }

    mysqli_close($conexion);

?>
