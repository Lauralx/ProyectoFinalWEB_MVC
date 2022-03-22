<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>MVC_PROJ_INICIO</title>
    <!-- plugins de css-->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <!-- plugins de JS-->
    <!-- jQuery library -->
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://kit.fontawesome.com/e632f1f723.js" crosssrigin="anonymous"> </script>
</head>

<body>

<div class="jumbotron text-center" style="margin-bottom:0">
        <h1>MVC PROYECTO</h1>
</div>

<!-- BOTONES-->

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <div class="menu" id="collapsibleNavbar">
        <ul class="navbar-nav">

        <?php if(isset($_GET["pagina"])): ?>

            <?php if ($_GET["pagina"] == "registro"): ?>
                <li class="nav-item">
                    <a class="nav-link active" href="index.php?pagina=registro">Registro</a>
                </li>
            <?php else: ?>
                <li class="nav-item">
                <a class="nav-link" href="index.php?pagina=registro">Registro</a>
            </li>
            <?php endif ?>

            <?php if ($_GET["pagina"] == "ingreso"): ?>
                <li class="nav-item">
                    <a class="nav-link active" href="index.php?pagina=ingreso">Ingreso</a>
                </li>
            <?php else: ?>
                <li class="nav-item">
                <a class="nav-link" href="index.php?pagina=ingreso">Ingreso</a>
            </li>
            <?php endif ?>

            <?php if ($_GET["pagina"] == "inicio"): ?>
                <li class="nav-item">
                    <a class="nav-link active" href="index.php?pagina=inicio">Inicio</a>
                </li>
            <?php else: ?>
                <li class="nav-item">
                <a class="nav-link" href="index.php?pagina=inicio">Inicio</a>
                </li>
            <?php endif ?>

            <?php if ($_GET["pagina"] == "salir"): ?>
                <li class="nav-item">
                    <a class="nav-link active" href="index.php?pagina=salir">Salir</a>
                </li>
            <?php else: ?>
                <li class="nav-item">
                <a class="nav-link" href="index.php?pagina=salir">Salir</a>
                </li>
            <?php endif ?>
        
        <?php else: ?>
            <li class="nav-item">
                <a class="nav-link active" href="index.php?pagina=registro">Registro</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="index.php?pagina=ingreso">Ingreso</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="index.php?pagina=inicio">Inicio</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php?pagina=salir">Salir</a>
            </li>  


        <?php endif ?>

        </ul>
    </div>  
</nav>

        <!--contenido-->
        <div class="container-fluid bg-light" style="background-image: url('https://lawebdelasalud.com/wp-content/uploads/2020/10/Tecnolog%C3%ADa-ojo.jpg');;background-repeat: no-repeat;background-size: cover;" >
            <div class="container">
                <?php 
                if(isset($_GET["pagina"])){

                    if($_GET["pagina"]== "registro"
                    || $_GET["pagina"]== "ingreso" 
                    || $_GET["pagina"]== "inicio"
                    || $_GET["pagina"]== "editar" 
                    || $_GET["pagina"]== "salir"){

                        include "paginas/".$_GET["pagina"].".php";
                    }else{
                        include "paginas/error404.php";
                    }

                }else{
                    include "paginas/registro.php";
                }
                ?>
            </div>
        </div>

<div class="jumbotron text-center" style="margin-bottom:0">
    <p>
        <br>Herramientas usadas: HTML, CSS, JS y PHP. <br>
        Docente: Jathinson Meneses <br>
        Estudiantes:
        <br> 2182054  Laura  Hernandez 
        <br> 2182070 Sebastian Vanegas <br>
        Grupo: J1 2021-2 <br></p>
        <p class="parrafo uis">UNIVERSIDAD INDUSTRIAL DE SANTANDER </p>

</body>

</html>

