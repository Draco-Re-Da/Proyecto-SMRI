<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Insertar Registros</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
        <div class="encabezado">
            <img class="rol" src="Imagenes/rol_planeacion.png" alt=""><h1 class="titulo">Jefe Planeación</h1><button type="submit" class="btn btn-primary">Salir</button>
        </div>
    </head>
    <center><h1>Ingreso De Nuevo Registro</h1></center>
    <nav>
        <ul class="nav justify-content-center">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="Rol_Planeacion_Ingresar.html">Ingresar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Rol_Planeacion_Actualizar.html">Actualizar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Rol_Planeacion_Consultar.html">Consultar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Rol_Planeacion_Eliminar.html">Eliminar</a>
                </li>
            </ul>
    </nav>
    <body>
        <?php

            //$busqueda = $_GET['buscar'];

            $codigo_flor = $_GET['codigo_flor'];
            $color_flor = $_GET['color_flor'];
            $fecha_siembra = $_GET['fecha_siembra'];
            $nombre_flor = $_GET['nombre_flor'];
            $numero_invernadero = $_GET['numero_invernadero'];
            $unidades_campo = $_GET['unidades_campo'];

            require("datos_conexion_bbdd.php");

            $conexion = mysqli_connect($db_host, $db_usuario, $db_contrasenna, $db_nombre);

            if (mysqli_connect_errno()){
                echo "Fallo al conectar con la BD";
                exit();
            }

            mysqli_select_db($conexion, $db_nombre) or die("No se encuentra la base de datos");

            mysqli_set_charset($conexion, "utf8");

            $consulta = "insert into siembra_campo_escritorio (codigo_flor, color_flor, fecha_siembra, nombre_flor, numero_invernadero, unidades_campo) values ($codigo_flor, '$color_flor', '$fecha_siembra', '$nombre_flor', $numero_invernadero, $unidades_campo)";

            $resultados = mysqli_query($conexion, $consulta);

            if($resultados==false){
                echo "Error en la consulta";
            }else{
                echo "Datos Ingresados Correctamente <br><br>";

                echo "<div class=row><div class=col>$codigo_flor</div>";

                echo "<div class=row><div class=col>$color_flor</div>";

                echo "<div class=row><div class=col>$fecha_siembra</div>";

                echo "<div class=row><div class=col>$nombre_flor</div>";

                echo "<div class=row><div class=col>$numero_invernadero</div>";

                echo "<div class=row><div class=col>$unidades_campo</div>";
            }

            mysqli_close($conexion);

        ?>






        <div class="pie">
            <footer>
                <center><strong>Todos los derechos reservados</strong></center>
                <center><strong>C.I CALLA FARMS</strong></center>
                <center><strong>Vigilado Mintrabajo</strong></center>
                <center><strong>2023</strong></center>
            </footer>
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
        </div>
    </body>
</html>