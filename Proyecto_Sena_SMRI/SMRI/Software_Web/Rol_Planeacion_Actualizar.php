<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Actualizar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
        <div class="encabezado">
            <img class="rol" src="Imagenes/rol_planeacion.png" alt=""><h1 class="titulo">Jefe Planeación</h1><button type="submit" class="btn btn-primary">Salir</button>
        </div>
    </head>
    <center><h1>Actualizar Información Empleado</h1></center>
    <nav>
        <ul class="nav justify-content-center">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="Rol_Planeacion_Ingresar.html">Ingresar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="Rol_Planeacion_Actualizar.html">Actualizar</a>
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
        <!_ Conexión Con La Base De Datos _>
        <?php
            require("datos_conexion_bbdd.php");

            $conexion = new mysqli($db_host, $db_usuario, $db_contrasenna, $db_nombre);

            if (mysqli_connect_errno()){
                echo "Fallo al conectar con la BD";
                exit();
            }

            mysqli_set_charset($conexion, "utf8");



        ?>


        <main>
            <div class="row">
                <div class="col">
                    <input type="text" class="form-control" placeholder="Ingrese Cédula Del Empleado" aria-label="First name">
                </div>
                <div class="col">
                    <input type="text" class="form-control" placeholder="Ingrese Nueva Área De Producción" aria-label="Last name">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col">
                    <input type="text" class="form-control" placeholder="Primer Nombre" aria-label="First name">
                </div>
                <div class="col">
                    <input type="text" class="form-control" placeholder="Segundo Nombre" aria-label="Last name">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col">
                    <input type="text" class="form-control" placeholder="Primer Apellido" aria-label="First name">
                </div>
                <div class="col">
                    <input type="text" class="form-control" placeholder="Segundo Apellido" aria-label="Last name">
                </div>
            </div>
            <br>
            <div class="botones">
                <button type="button" class="btn btn-primary btn-lg">Enviar</button>
                <button type="button" class="btn btn-secondary btn-lg">Cancelar</button>
            </div>
        </main>







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