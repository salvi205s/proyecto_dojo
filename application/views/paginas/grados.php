<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grados</title>

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
                        <a class="nav-item nav-link mr-lg-4 mr-md-2" href="<?= base_url() ?>DojoController/cargarPag/home">INICIO</a>
                        <a class="nav-item nav-link active mr-lg-4 mr-md-2" style="background-color: #EE1C25; color: white;" href="#">GRADOS</a>
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

                <div id="userIni" class="d-flex align-items-start h-25 ">

                    <?php


                    if (isset($_SESSION['nombreSesion'])) {

                        if ($_SESSION['tipo'] == "admin") {
                    ?>
                            <a href="<?= base_url() ?>TablaDatosController/listarTabla" class="font-weight-bold mt-2 ">
                                <img src="<?= base_url() ?>recursos/img/user.png" class="user mb-3" alt="user">
                                <?= $_SESSION['nombreSesion'] ?></a>

                        <?php
                        } else {

                        ?>
                            <a href="<?= base_url() ?>DojoController/cargarPagMisDatos/misDatos" class="font-weight-bold mt-2">
                                <img src="<?= base_url() ?>recursos/img/user.png" class="user mb-3" alt="user">
                                <?= $_SESSION['nombreSesion'] ?></a>

                        <?php
                        }
                    } else {
                        ?>
                        <a href="<?= base_url() ?>DojoController/cargarPag/inicio_sesion" class="font-weight-bold">
                            <img src="<?= base_url() ?>recursos/img/user.png" class="user mb-3" alt="user">
                            Inicia sesion</a>
                    <?php
                    }
                    ?>


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
                    <li><a class="nav-item nav-link active mr-lg-4 mr-md-2" style=" color: #EE1C25;" href="<?= base_url() ?>DojoController/cargarPag/grados">GRADOS</a></li>
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
                <img src="<?= base_url() ?>recursos/img/letras2-min.png" alt="kanji">
                <img src="<?= base_url() ?>recursos/img/letras-min.png" alt="kanji">
            </div>
            <!-- fin div izquierdo ------------------------------------------------- -->

            <!-- div centro ------------------------------------------------- -->
            <div class="centro col-md-8">

                <!-- historia -->
                <div class="historia text-left pb-5 pr-2 d-flex justify-content-around flex-column font-weight-normal">
                    <h4 class="mt-3 mb-3 text-center">Intervalos de exámenes y requisitos</h4>

                    <img src="<?= base_url() ?>recursos/img/Grados-min.jpg" class="w-75 m-auto " alt="kanji">

                    <div class="ml-3 text-left">
                        <h5 class="text-left mt-4 mb-0"> 10º Kyu hasta 3ºKyu </h5>

                        <ul class="">
                            <li>Los exámenes se pueden realizar en intervalos de 3 meses como mínimo.</li>
                        </ul>

                        <h5> 3º Kyu hasta 1ºKyu</h5>
                        <ul>
                            <li>Intervalos de 6 meses, como mínimo.</li>
                            <li class="list-unstyled mt-3">Requisitos examen 1ºKYU Tribunal Nacional (Curso Verano)</li>
                            <ul>
                                <li>Fotocopia D.N.I.</li>
                                <li> 1 fotocopia Carnet de grados o pasaporte Europeo. (Llevar el original para firmar
                                    el Grado)
                                </li>
                                <li> 1 fotocopia del abono de la cuota correspondiente a su examen.
                                </li>
                                <li> Diplomas Originales de 10ª a 2º Kyu
                                </li>
                                <li> Mínimo 3 licencias consecutivas de la FKE, hasta el año de examen.
                                </li>
                                <li> Envío postal de la documentación un mes antes de la fecha de Examen, a la FKE.</li>
                            </ul>

                        </ul>

                        <h5> 1º Kyu a Cinto Negro (Juvenil)</h5>
                        <ul>
                            <li>Se deberá poseer el 1º Kyu un año como mínimo antes de presentarse a C.N.</li>

                            <li class="list-unstyled mt-3">Requisitos examen C.N. Tribunal Nacional (Curso Verano)
                            </li>
                            <ul>
                                <li>Fotocopia D.N.I.</li>
                                <li> 2 fotos tamaño (3,5 x 4,5 cms.) en Dogi con fondo claro, que se vea el Kanji de
                                    Shinkyokushin. -NO posición Kumite-
                                </li>
                                <li> 1 fotocopia Carnet de grados o pasaporte Europeo. (Llevar el original para firmar
                                    el Grado)
                                </li>
                                <li> 1 fotocopia del abono de la cuota correspondiente a su examen.
                                </li>
                                <li> Diplomas Originales de 10ª a 1º Kyu
                                </li>
                                <li> Mínimo 3 licencias consecutivas de la FKE, hasta el año de examen.
                                </li>
                                <li>
                                    Envío postal de la documentación un mes antes de la fecha de Examen, a la FKE.
                                </li>
                            </ul>

                        </ul>

                        <h5> 1º Kyu ó C.N. a Shodan
                        </h5>
                        <ul>
                            <li>Se deberá poseer el 1º Kyu ó C.N. un año como mínimo, antes de presentarse a Shodan.
                            </li>
                            <li>Tener 18 años cumplidos.
                            </li>
                            <li>Con 17 años, se permite examen con autorización paterna y del Instructor
                                (Solicitar documento a la FKE)
                            </li>

                            <li class="list-unstyled mt-3">Requisitos examen Shodan Tribunal Nacional (Curso Verano)

                            </li>
                            <ul>
                                <li>Fotocopia D.N.I.</li>
                                <li> 3 fotos tamaño (3,5 x 4,5 cms.) en Dogi con fondo claro, que se vea el Kanji de
                                    Shinkyokushin. -NO posición Kumite-
                                </li>
                                <li> 1 fotocopia Carnet de grados o pasaporte Europeo. (Llevar el original para firmar
                                    el Grado)
                                </li>
                                <li> 1 fotocopia del abono de la cuota correspondiente a su examen.
                                </li>
                                <li> Diplomas Originales de 10ª a 1º Kyu (No necesario en caso de poseer C.N.)
                                </li>
                                <li> Mínimo 3 licencias consecutivas de la FKE, hasta el año de examen.
                                </li>
                                <li>
                                    Envío postal de la documentación un mes antes de la fecha de Examen, a la FKE.
                                </li>
                            </ul>
                        </ul>

                        <h5>
                            Nidan a Sandan
                        </h5>
                        <ul>
                            <li>Tiempo mínimo 3 años.
                            </li>
                            <li>Tener 25 años cumplidos.
                            </li>

                            <li class="list-unstyled mt-3">Requisitos examen Sandan Tribunal Nacional (Curso Verano)
                            </li>

                            <ul>
                                <li>
                                    Copia Diploma Nidan
                                </li>
                                <li>
                                    2 fotos tamaño (3,5 x 4,5 cms.) en Dogi con fondo claro, que se vea el Kanji de
                                    Shinkyokushin. -NO posición Kumite-

                                </li>
                                <li>
                                    1 fotocopia Pasaporte Europeo. (Llevar el original para firmar el Grado)

                                </li>

                                <li>
                                    1 fotocopia del abono de la cuota correspondiente a su examen.

                                </li>
                                <li> Presentación Kata original con un mínimo de 27 movimientos. (Enviar en word ó pdf
                                    por e-mail)

                                </li>
                                <li>
                                    Mínimo 3 licencias consecutivas de la FKE, hasta el año de examen.
                                </li>
                                <li>
                                    Envío postal de la documentación un mes antes de la fecha de Examen, a la FKE.

                                </li>
                            </ul>
                        </ul>

                        <h5>
                            Sandan a Yondan
                        </h5>
                        <ul>
                            <li>
                                Tiempo mínimo 4 años.
                            </li>
                            <li>
                                Tener 25 El examen será en convocatoria Internacional.
                                años cumplidos.
                            </li>
                            <li>
                                Con recomendación del Comité de la FKE.

                            </li>

                        </ul>

                        <h5>
                            Yondan a Godan
                        </h5>
                        <ul class="mb-5">
                            <li>
                                Tiempo mínimo 5 años.
                            </li>
                            <li>
                                El examen será en convocatoria Internacional.
                            </li>
                            <li>
                                Con recomendación del Comité de la FKE.
                            </li>

                        </ul>


                    </div>



                </div>
                <!-- fin de historia -->

                <!-- palabra -->
                <div class="palabra text-left p-3 mt-3">

                    <h3 class="text-center mb-4 ">Nomenclatura y cintos
                    </h3>
                    <ul class="list-inline">
                        <li>Shodan a Nidan: Senpai</li>
                        <li>Sandan a Yondan: Sensei</li>
                        <li>Godan en adelante: Shihan</li>
                        <li>Mas Oyama – 10º Dan: Sosai</li>
                        <li>Cada raya dorada en el cinturón, indica un Dan</li>
                    </ul>

                </div>

                <!-- fin de palabra -->

                <!-- kanku ------------------------------------------------ -->
                <div class="palabra text-center p-3 mt-3 mb-3">

                    <h3 class="text-center">Distribución de los colores de los Kyus del Paso de Grados
                    </h3>

                    <img class="w-100" src="<?= base_url() ?>recursos/img/fke_examenes_colores_kyus-min.jpg" alt="ima cinturoes">

                </div>
            </div>
            <!-- fin div centro ------------------------------------------------- -->

            <!-- div derecho ------------------------------------------------- -->
            <div class="kanji_drcho col-2 d-md-flex justify-content-around flex-column ">
                <img src="<?= base_url() ?>recursos/img/letras-min.png" alt="kanji">
                <img src="<?= base_url() ?>recursos/img/letras2-min.png" alt="kanji">
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

</body>

</html>