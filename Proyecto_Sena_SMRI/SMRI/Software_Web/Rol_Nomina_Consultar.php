<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Consultar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
        <div class="encabezado">
            <img class="rol" src="Imagenes/rol_nomina.png" alt=""><h1 class="titulo">Auxiliar De Nómina</h1><button type="submit" class="btn btn-primary">Salir</button>
        </div>

        <?php

            function ejecuta_consulta($labusqueda){

            //$busqueda = $_GET['buscar'];

            require("datos_conexion_bbdd.php");

            $conexion = new mysqli($db_host, $db_usuario, $db_contrasenna, $db_nombre);

            if (mysqli_connect_errno()){
                echo "Fallo al conectar con la BD";
                exit();
            }

            mysqli_set_charset($conexion, "utf8");

            $consulta = "SELECT * FROM empleados WHERE cedula = '$labusqueda'";
            $resultados = mysqli_query($conexion, $consulta);

            while ($fila = mysqli_fetch_array($resultados, MYSQLI_ASSOC)){

                echo $fila['cedula'] . " ";
                echo $fila['primer_nombre'] . " ";
                echo $fila['segundo_nombre'] . " ";
                echo $fila['primer_apellido'] . " ";
                echo $fila['segundo_apellido'] . " ";
                echo $fila['area_trabajo'] . " ";

                echo "<br>";

            }

            mysqli_close($conexion);

        }

        ?>

    </head>
    <center><h1>Consultar Un Empleado</h1></center>
    <nav>
        <ul class="nav justify-content-center">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link active" href="Rol_Nomina_Consultar.html">Consultar</a>
                </li>
            </ul>
    </nav>
    <body>
        <?php

        @$mibusqueda = $_GET['buscar'];
        $mipag = $_SERVER["PHP_SELF"];

        if($mibusqueda!=NULL){
            ejecuta_consulta($mibusqueda);
        }else{
            echo("<form action='" . $mipag . "' method='get'><label> Ingrese la cedula del trabajador <input type='text' name='buscar'></label><input type='submit' name='enviando' value='Buscar'></form>");
        }


        ?>

        <!--<main>
            <div class="row">
                <div class="col">
                    <input type="text" class="form-control" placeholder="Ingrese la cédula a consultar" aria-label="First name">
                </div>
                <div class="col">
                    <input type="text" class="form-control" placeholder="Confirme el área de producción" aria-label="Last name">
                </div>
            </div>
            <br>
            <div class="fecha">
                <select class="form-select" aria-label="Default select example">
                    <option selected>Seleccione El Mes</option>
                    <option value="1">Enero</option>
                    <option value="2">Febrero</option>
                    <option value="3">Marzo</option>
                    <option value="4">Abril</option>
                    <option value="5">Mayo</option>
                    <option value="6">Junio</option>
                    <option value="7">Julio</option>
                    <option value="8">Agosto</option>
                    <option value="9">Septiembre</option>
                    <option value="10">Octubre</option>
                    <option value="11">Noviembre</option>
                    <option value="12">Diciembre</option>
                </select>
                <select class="form-select" aria-label="Default select example">
                    <option selected>Seleccione el año</option>
                    <option value="1">2023</option>
                    <option value="2">2024</option>
                    <option value="3">2025</option>
                    <option value="4">2026</option>
                    <option value="5">2027</option>
                    <option value="6">2028</option>
                    <option value="7">2029</option>
                    <option value="8">2030</option>
                    <option value="9">2031</option>
                    <option value="10">2032</option>
                    <option value="11">2033</option>
                    <option value="12">2034</option>
                </select>
            </div>
            <div class="resultado">
                <div class="alert alert-primary" role="alert">
                    Las horas trabajadas son:
                </div>
                <div class="alert alert-primary" role="alert">
                    Las unidades producidas son:
                </div>
            </div>
        </main>-->







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