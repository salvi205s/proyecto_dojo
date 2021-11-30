<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio sesion</title>

    <link rel="stylesheet" href="<?= base_url() ?>recursos/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>recursos/css/style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,900;1,100&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,900;1,100;1,300&display=swap" rel="stylesheet">

    <script src="<?= base_url() ?>recursos/js/jquery-3.6.0.min.js"></script>
    <script src="<?= base_url() ?>recursos/js/popper.min.js"></script>
    <script src="<?= base_url() ?>recursos/js/bootstrap.min.js"></script>
    <script src="<?= base_url() ?>recursos/js/jquery.animate-colors-min.js"></script>
    <script src="<?= base_url() ?>recursos/js/js.js"></script>

</head>

<body>

    <div class="container-xl m-auto">


        <div class="cabecera_escritorio row mb-4">

            <div class="col-xl-9 col-md-8 p-0">

                <div class="d-flex align-items-center justify-content-center col-7 ml-auto">
                    <img src="<?= base_url() ?>recursos/img/kanku-min.png" class="kanku" alt="kanku">
                    <h1 class="font-weight-bolder">Dojo Kyoku</h1>
                </div>

                <nav class="navbar navbar-expand navbar-light ml-auto mr-xl-4 p-0 mt-4">
                    <div class="nav navbar-nav d-flex ml-md-auto font-weight-bold ">
                        <a class="nav-item nav-link mr-lg-4 mr-md-2" href="<?= base_url() ?>DojoController/cargarPag/home">INICIO </a>
                        <a class="nav-item nav-link mr-lg-4 mr-md-2" href="<?= base_url() ?>DojoController/cargarPag/grados">GRADOS</a>
                        <a class="nav-item nav-link mr-lg-4 mr-md-2" href="<?= base_url() ?>DojoController/cargarPag/horarios">HORARIOS</a>
                        <a class="nav-item nav-link mr-lg-4 mr-md-2" href="<?= base_url() ?>DojoController/cargarPag/contacto">CONTACTO</a>
                        <a class="nav-item nav-link mr-lg-4 mr-md-2" href="<?= base_url() ?>DojoController/cargarPag/nosotros">NOSOTROS</a>
                    </div>
                </nav>
            </div>

            <div id="user" class="d-flex justify-content-start ml-xl-auto mr-xl-5 pt-1">

                <div class="d-flex align-items-end" id="silueta-cont">
                    <img src="<?= base_url() ?>recursos/img/Karate_silhouette.png" class="silueta" alt="silueta karate">

                </div>

                <div id="userIni" class="d-flex align-items-start h-25">

                    <a href="<?= base_url() ?>DojoController/cargarPag/inicio_sesion" class="font-weight-bold mt-2">
                        <img src="<?= base_url() ?>recursos/img/user.png" class="user" alt="user">
                        Inicia sesion</a>

                </div>
            </div>

        </div>
        <!-- fin de cabecera_escritorio -->
        <!-- ------------------------------------------------------------------------------------------------ -->
        <div class="cabecera_movil row mb-3">
            <div class="col-2 d-flex align-items-center">
                <img src="<?= base_url() ?>recursos/img/menu.png" width="32" alt="menu">
            </div>

            <div class="d-flex align-items-center justify-content-center col-7 ">
                <img src="<?= base_url() ?>recursos/img/kanku-min.png" class="kanku" alt="kanku">
                <h4 class="font-weight-bolder">Dojo Kyoku</h4>
            </div>

            <div class="col-2 d-flex align-items-center justify-content-end ml-auto">
                <?php

                if (isset($_SESSION['nombreSesion'])) {

                    if (isset($_SESSION['tipo']) && $_SESSION['tipo'] == "admin") {

                ?>
                        <a href="<?= base_url() ?>TablaDatosController/listarTabla" class="font-weight-bold mt-2 ">
                            <img src="<?= base_url() ?>recursos/img/user.png" class="user" alt="user">
                            <?= $_SESSION['nombreSesion'] ?></a>

                    <?php
                    } else {

                    ?>
                        <a href="<?= base_url() ?>DojoController/cargarPagMisDatos/misDatos" class="font-weight-bold mt-2">
                            <img src="<?= base_url() ?>recursos/img/user.png" class="user" alt="user">
                            <?= $_SESSION['nombreSesion'] ?></a>

                    <?php
                    }
                } else {
                    ?>
                    <a href="<?= base_url() ?>DojoController/cargarPag/inicio_sesion" class="font-weight-bold">
                        <img src="<?= base_url() ?>recursos/img/user.png" class="user" alt="user">
                    </a>
                <?php
                }
                ?>
            </div>
        </div>

        <!-- menu movil -->
        <!-- ------------------------------------------------------------- -->
        <div id="menu" class="position-absolute col-12 ">

            <div class="d-flex">
                <div class="logo-menu-movil col-11">
                    <div class="d-flex align-items-center justify-content-center col-12 mb-4 ">

                        <h3 class="font-weight-bolder">Dojo Kyoku</h3>
                        <img src="<?= base_url() ?>recursos/img/kankuLogo.png" class="kankulogo" alt="kanku">
                    </div>

                </div>
                <div class="cerrar col-1 d-flex justify-content-center align-items-start">
                    <img src="<?= base_url() ?>recursos/img/close.png" class="cerrar" alt="kanku">

                </div>
            </div>



            <div class="menu-movil ml-5">

                <ul id="lista-menu" class="list-unstyled ">
                    <li><a class="nav-item nav-link mr-lg-4 mr-md-2" href="<?= base_url() ?>DojoController/cargarPag/home">INICIO</a></li>
                    <li><a class="nav-item nav-link mr-lg-4 mr-md-2" href="<?= base_url() ?>DojoController/cargarPag/grados">GRADOS</a></li>
                    <li><a class="nav-item nav-link mr-lg-4 mr-md-2" href="<?= base_url() ?>DojoController/cargarPag/horarios">HORARIOS</a></li>
                    <li><a class="nav-item nav-link mr-lg-4 mr-md-2" href="<?= base_url() ?>DojoController/cargarPag/contacto">CONTACTO</a></li>
                    <li><a class="nav-item nav-link mr-lg-4 mr-md-2" href="<?= base_url() ?>DojoController/cargarPag/nosotros">NOSOTROS</a></li>

                </ul>
            </div>

            <div class="col-12 ">
                <img src="<?= base_url() ?>recursos/img/menu_movil.png" class="w-100" alt="imagen">

            </div>
        </div>
        <!-- ------------------------------------------------------------- -->

        <!-- cuerpo -->
        <div id="contenedor" class="cuerpo m-auto p-0 d-flex align-items-stretch">

            <!-- div izquierdo ------------------------------------------------- -->
            <div class="kanji_izq col-2 d-md-flex justify-content-around flex-column">
                <img src="<?= base_url() ?>recursos/img/letras-min.png" alt="kanji">

            </div>
            <!-- fin div izquierdo ------------------------------------------------- -->

            <!-- div centro ------------------------------------------------- -->
            <div class="centro col-md-8 mb-4">

                <!-- contacto -->
                <div class="contacto col-12 p-3 text-center font-weight-bold ">

                    <p class="font-weight-bold">INICIO DE SESIÓN</p>

                    <?php
                    if (isset($_SESSION['errorLogin'])) {
                        echo "<span class='text-danger'>El usuario o contraseña es incorrecto</span>";
                    }
                    ?>

                    <div class="col-12 m-auto mb-3 text-left d-flex align-items-center  ">

                        <?php
                        echo form_open('loginController/login')
                        ?>
                        <label class="labEscritorio col-12" for="nombreLog">Nombre</label>
                        <input type="text" class="mb-2 col-11" name="nombreLog" id="nombreLog" placeholder="nombre" value="<?php if (isset($_POST['nombreLog'])) echo $_POST['nombreLog'] ?>" required>


                        <label class="labEscritorio col-12" for="clave">Contraseña</label>
                        <input class="col-11" type="password" name="clave" id="clave" placeholder="Contraseña" value="1234" required>

                        <button type="submit" class="boton col-5 mt-3 mb-3 align-self-center btn btn-danger ">Enviar</button>
                        <br>
                        <a href="<?= base_url() ?>DojoController/cargarPag/recPass" class="text_enlace">¿Has olvidado tu contraseña?</a>
                        <br>
                        <a href="<?= base_url() ?>DojoController/cargarPag/registro" class="text_enlace">Registrarse</a>

                        <img class="w-100" src="<?= base_url() ?>recursos/img/pngwing.com.png" alt="">
                        </form>

                    </div>

                </div>

            </div>
            <!-- fin div centro ------------------------------------------------- -->

            <!-- div derecho ------------------------------------------------- -->
            <div class="kanji_drcho col-2 d-md-flex justify-content-around flex-column ">
                <img src="<?= base_url() ?>recursos/img/letras-min.png" alt="kanji">


            </div>
            <!-- fin div derecho ------------------------------------------------- -->

        </div>
        <!-- fin de cuerpo -->

        <!-- pie de pagina ----------------------------------------------------------------------- -->
        <footer>

            <div class="col-12 text-white pt-4 ">


                <div class="logopie pb-2 flex-column col-sm-12 col-md-5 col-lg-4">

                    <div class="d-flex align-items-center">
                        <h3 class="font-weight-bolder col-12 pl-0">
                            <img src="<?= base_url() ?>recursos/img/kankuLogo.png" class="" alt="logo">
                            Dojo Kyoku
                        </h3>

                    </div>

                </div>

                <div class="col-sm-12 col-md-5 pt-lg-2 text-md-center text-sm-left">
                    <h4 class="">
                        Av. Juan Carlos I nº26
                        29680, Málaga, Estepona <br />
                        Telefono: 666325547
                    </h4>
                </div>


            </div>
            <p class="text-white ml-3">
                © 2021. All rights reserved.
            </p>
        </footer>

        <a id="go-up" href="#contenedor">
            <img src="<?= base_url() ?>recursos/img/down-arrow.png" alt="ir hacia arriba">
        </a>


    </div>














    <!-- ------------------------------------------------- -->



    <script>
        $(document).ready(function() {

            /* desplegar menu hamburguesa  */
            $(".cabecera_movil > div:nth-child(1) > img:nth-child(1)").click(function(e) {
                console.log("cerrar");


                $("#menu").css({
                    "display": "block"
                });
                $("#menu").stop().animate({
                    "left": "0"
                }, 500);
                /* $("body").css({ "overflow": "hidden" }); */

            });

            $("img.cerrar").click(function(e) {

                $("#menu").stop().animate({
                    "left": "-100vw"
                }, 500);

            });


            $(window).scroll(function() {
                console.log("scroll");
                if ($(window).scrollTop() > 1) {

                    $("a#go-up").css("display", "block");

                    $("a#go-up").click(function(e) {
                        $("html, body").stop().animate({
                            "scrollTop": "0"
                        }, 800);
                        console.log("arriba");
                    });
                    $("a#go-up").css("opacity", "0.5");


                } else if ($(window).scrollTop() === 0) {
                    $("header").css({
                        "opacity": "1"
                    });

                    $("a#go-up").css("display", "none");

                }
            });


            /* ---------------------------------------------------------------------- */
        });
    </script>


</body>

</html>