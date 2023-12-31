<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Inicio</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
        <div class="encabezado-index">
            <center><h1>Bienvenido A SMRI</h1></center>
        </div>
    </head>
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
            <form>
    <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Usuario</label>
    <div class="col-sm-10">
        <inputtype="email" class="form-control" id="nombre@example.com">
    </div>
    </div>
    <div class="row mb-3">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Contraseña</label>
    <div class="col-sm-10">
        <inputtype="password" class="form-control" id="123porchlio">
    </div>
    </div>
    <fieldset class="row mb-3">
    <legend class="col-form-label col-sm-2 pt-0">¿Sucedio Algo?</legend>
    <div class="col-sm-10">
        <div class="form-check">
        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
        <label class="form-check-label" for="gridRadios1">
            Si olvido su usuario marque aquí
        </label>
        </div>
        <div class="form-check">
        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
        <label class="form-check-label" for="gridRadios2">
            Si olvido su contraseña marque aquí
        </label>
        </div>
        <div class="form-check disabled">
        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option3">
        <label class="form-check-label" for="gridRadios3">
            Si desea registrarse marque aquí
        </label>
        </div>
    </div>
    </fieldset>
    <center><button type="submit" class="btn btn-primary">Ingresar</button></center>
</form>
        </main>







        <div class="pie-index">
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