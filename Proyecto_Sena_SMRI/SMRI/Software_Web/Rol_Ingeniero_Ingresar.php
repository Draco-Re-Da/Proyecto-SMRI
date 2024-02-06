<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Ingresar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
        <div class="encabezado">
            <img class="rol" src="Imagenes/rol_ingeniero.jpg" alt=""><h1 class="titulo">Ingeniero Jefe De Planta</h1><button type="submit" class="btn btn-primary">Salir</button>
        </div>
    </head>
    <center><h1>Ingresar Nueva Planeación</h1></center>
    <nav>
        <ul class="nav justify-content-center">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="Rol_Ingeniero_Ingresar.html">Ingresar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Rol_Ingeniero_Actualizar.html">Actualizar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Rol_Ingeniero_Consultar.html">Consultar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Rol_Ingeniero_Eliminar.html">Eliminar</a>
                </li>
            </ul>
    </nav>
    <body>
    <div align="center">
        <form name="form1" method="$_GET" action="Rol_Ingeniero_Insertar_Registro.php">
            <div class="row">
                <div class="col">
                    <label for="codigo_flor"></label>
                    Código Flor <input type="text" name="codigo_flor" id="codigo_flor" placeholder="Ingrese Codigo Flor">
                </div>
                <div class="col">
                    <label for="color_flor"></label>
                    Color Flor <input type="text" name="color_flor" id="color_flor" placeholder="Ingrese color flor">
                </div>
            </div>
            <br>
            <div class="row">
            <div class="col">
                    <label for="fecha_siembra"></label>
                    Fecha Siembra <input type="text" name="fecha_siembra" id="fecha_siembra" placeholder="Ingrese fecha siembra">
                </div>
                <div class="col">
                    <label for="nombre_flor"></label>
                    Nombre Flor <input type="text" name="nombre_flor" id="nombre_flor" placeholder="Ingrese nombre flor">
                </div>
            </div>
            <br>
            <div class="row">
            <div class="col">
                    <label for="numero_invernadero"></label>
                    Número Invernadero <input type="text" name="numero_invernadero" id="numero_invernadero" placeholder="Ingrese número invernadero">
                </div>
                <div class="col">
                    <label for="unidades_campo"></label>
                    Unidades Campo <input type="text" name="unidades_campo" id="unidades_campo" placeholder="Ingrese unidades campo">
                </div>
            </div>
            <br>
            <input type='submit' name='enviando' value='Enviar'>
            <input type='submit' name='enviando' value='Cancelar'>
        </form>
        </div>









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