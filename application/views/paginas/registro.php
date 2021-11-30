<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>

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
                <a href="<?= base_url() ?>DojoController/cargarPag/inicio_sesion" class="font-weight-bold mt-2">
                    <img src="<?= base_url() ?>recursos/img/user.png" class="user" alt="user">
                </a>
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

                    <p class="font-weight-bold">Registro</p>

                    <span class="text-danger">
                        <?php
                        if (isset($_SESSION['errorHorario'])) {
                            echo "No puedes ir a ese horario, consulta los horarios";
                        }
                        if (isset($_SESSION['errorRegistro'])) {
                            echo "Los datos introducidos no son correctos";
                        }
                        ?>
                    </span>

                    <div class="col-12 m-auto mb-3 text-left">

                        <form class="d-flex flex-column align-items-center col-12" action="<?= base_url() ?>RegistroController/add_usuario" method="post">

                            <label class="labEscritorio col-12" for="nombre">Nombre</label>
                            <input type="text" class="mb-2 col-11" name="nombre" id="nombre" placeholder="nombre" value="<?php if (isset($_POST['nombre'])) echo $_POST['nombre'] ?>" required>

                            <label class="labEscritorio col-12" for="DNI">DNI</label>
                            <input type="text" class="mb-2 col-11" name="DNI" id="DNI" pattern="(([X-Z]{1})([-]?)(\d{7})([-]?)([A-Z]{1}))|((\d{8})([-]?)([A-Z]{1}))" maxlength="9" placeholder="DNI" value="<?php if (isset($_POST['DNI'])) echo $_POST['DNI'] ?>" required>
                            <?php
                            if (isset($_SESSION['dni_no_valido'])) {
                                echo "<span class='text-danger'>El número de DNI no es correcto</span>";
                            }
                            if (isset($_SESSION['dni_repetido'])) {
                                echo "<span class='text-danger'>El DNI ya existe</span>";
                            }
                            ?>
                            <label class="labEscritorio col-12" for="clave">Contraseña</label>
                            <input class="mb-2 col-11" type="password" name="clave" id="clave" value="1234" placeholder="Contraseña" required>

                            <label class="labEscritorio col-12" for="claveRep">Repita la contraseña</label>

                            <input class="mb-2 col-11" type="password" name="claveRep" id="claveRep" value="1234" placeholder="Repita Contraseña" required>

                            <?php
                            if (isset($_SESSION['clavesIguales'])) {
                                echo "<span class='text-danger'>Las claves tienen que ser iguales</span>";
                            }
                            ?>
                            <label class="labEscritorio col-12" for="email">Email</label>
                            <input class="mb-3 col-11" type="email" name="email" id="email" placeholder="Email" value="<?php if (isset($_POST['email'])) echo $_POST['email'] ?>" required>

                            <div class="col-12 mb-3 d-flex pl-0">
                                <label class="col-2 " for="edadR">Edad</label>

                                <select class="" name="edadR" id="edadR">

                                    <?php
                                    for ($i = 10; $i <= 90; $i++) {
                                    ?>
                                        <option value="<?= $i ?>" <?php if (isset($_POST["edadR"]) && $_POST["edadR"] ==  $i) echo "selected"; ?>><?= $i ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>

                            <div class="col-12 mb-3 d-flex">
                                <label><strong>Horario:</strong></label>
                                <select class="ml-2 " name="horarioR" id="horarioR">
                                    <option value="1" <?php if (isset($_POST["horarioR"]) && $_POST["horarioR"] == "1") echo "selected"; ?>>10:00 a 11:00, 2 días 30€</option>
                                    <option value="2" <?php if (isset($_POST["horarioR"]) && $_POST["horarioR"] == "2") echo "selected"; ?>>11:30 a 12:30, 2 días 30€</option>
                                    <option value="3" <?php if (isset($_POST["horarioR"]) && $_POST["horarioR"] == "3") echo "selected"; ?>>17:00 a 18:00, 2 días 30€</option>
                                    <option value="4" <?php if (isset($_POST["horarioR"]) && $_POST["horarioR"] == "4") echo "selected"; ?>>18:15 a 19:15, 2 días 30€</option>
                                    <option value="5" <?php if (isset($_POST["horarioR"]) && $_POST["horarioR"] == "5") echo "selected"; ?>>19:30 a 20:30, 2 días 30€</option>
                                    <option value="6" <?php if (isset($_POST["horarioR"]) && $_POST["horarioR"] == "6") echo "selected"; ?>>10:00 a 11:00, 3 días 35€</option>
                                    <option value="7" <?php if (isset($_POST["horarioR"]) && $_POST["horarioR"] == "7") echo "selected"; ?>>11:30 a 12:30, 3 días 35€</option>
                                    <option value="8" <?php if (isset($_POST["horarioR"]) && $_POST["horarioR"] == "8") echo "selected"; ?>>17:00 a 18:00, 3 días 35€</option>
                                    <option value="9" <?php if (isset($_POST["horarioR"]) && $_POST["horarioR"] == "9") echo "selected"; ?>>18:15 a 19:15, 3 días 35€</option>
                                    <option value="10" <?php if (isset($_POST["horarioR"]) && $_POST["horarioR"] == "10") echo "selected"; ?>>19:30 a 20:30, 3 días 35€</option>
                                </select>

                            </div>

                            <!-- <div class="col-12 mb-3 d-flex">
                                <p><strong>Horas a la semana:</strong></p>

                                <select class="ml-auto" name="horSemana" id="horSemana">
                                    <option value="2" <?php if (isset($_POST["horSemana"]) && $_POST["horSemana"] == "2") echo "selected"; ?>>2</option>
                                    <option value="3" <?php if (isset($_POST["horSemana"]) && $_POST["horSemana"] == "3") echo "selected"; ?>>3</option>
                                </select>
                            </div> -->

                            <div class="col-12 mb-3  ">
                                <label class="labEscritorio" for="nCuenta">Número de cuenta</label>
                                <input type="text" class="mb-2 ml-auto " name="nCuenta" id="nCuenta" placeholder="número de cuenta" value="<?php if (isset($_POST['nCuenta'])) echo $_POST['nCuenta'] ?>" required>
                            </div>

                            <p class="align-self-center mt-3">
                                <!--  <input type="checkbox" name="terminos" id="privacidad">
                                <label for="privacidad">Aceptar politica de privacidad</label> -->
                            </p>
                            <button type="submit" class="boton col-5  mb-3 align-self-center btn btn-danger">Enviar</button>

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