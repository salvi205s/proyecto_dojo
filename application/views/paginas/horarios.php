

<body>

<div class="container-fluid m-auto " style="max-width: 1100px;">

        <div class="cabecera_escritorio row mb-4">

            <div class="col-xl-9 col-md-8 p-0">

                <div class="d-flex align-items-center justify-content-center col-7 ml-auto">
                    <img src="<?= base_url() ?>recursos/img/kanku-min.png" width="32" height="32" class="kanku" alt="kanku">

                    <h1 class="font-weight-bolder">Dojo Kyoku</h1>
                </div>

                <nav class="navbar navbar-expand navbar-light ml-auto mr-xl-4 p-0 mt-4">
                    <div class="nav navbar-nav d-flex ml-md-auto font-weight-bold ">
                        <a class="nav-item nav-link mr-lg-4 mr-md-2" href="<?= base_url() ?>DojoController/cargarPag/home">INICIO</a>
                        <a class="nav-item nav-link mr-lg-4 mr-md-2" href="<?= base_url() ?>DojoController/cargarPag/grados">GRADOS</a>
                        <a class="nav-item nav-link active mr-lg-4 mr-md-2 bg-danger text-white" href="<?= base_url() ?>DojoController/cargarPag/horarios">HORARIOS</a>
                        <a class="nav-item nav-link mr-lg-4 mr-md-2" href="<?= base_url() ?>DojoController/cargarPag/contacto">CONTACTO</a>
                        <a class="nav-item nav-link mr-lg-4 mr-md-2" href="<?= base_url() ?>DojoController/cargarPag/nosotros">NOSOTROS</a>
                    </div>
                </nav>
            </div>

            <div id="user" class="d-flex justify-content-start ml-xl-auto mr-xl-5 pt-1">

                <div class="d-flex align-items-end" id="silueta-cont">
                    <img src="<?= base_url() ?>recursos/img/Karate_silhouette-min.png" width="100" height="111" class="silueta" alt="silueta karate">

                </div>

                <div id="userIni" class="d-flex align-items-start h-25 ">

                    <?php

                    if (isset($_SESSION['nombreSesion'])) {

                        if (isset($_SESSION['tipo']) && $_SESSION['tipo'] == "admin") {
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
                <img src="<?= base_url() ?>recursos/img/menu.png" width="32" height="32" alt="menu">
            </div>

            <div class="d-flex align-items-center justify-content-center col-7 ">
                <img src="<?= base_url() ?>recursos/img/kanku-min.png" width="32" height="32" class="kanku" alt="kanku">

                <h4 class="font-weight-bolder">Dojo Kyoku</h4>
            </div>

            <div class="col-2 d-flex align-items-center justify-content-end ml-auto">
                <?php

                if (isset($_SESSION['nombreSesion'])) {

                    if (isset($_SESSION['tipo']) && $_SESSION['tipo'] == "admin") {
                ?>
                        <a href="<?= base_url() ?>TablaDatosController/listarTabla" class="font-weight-bold mt-2 ">
                            <img src="<?= base_url() ?>recursos/img/user.png" width="32" height="32"  class="user" alt="user">
                            <?= $_SESSION['nombreSesion'] ?></a>

                    <?php
                    } else {

                    ?>
                        <a href="<?= base_url() ?>DojoController/cargarPagMisDatos/misDatos" class="font-weight-bold mt-2">
                            <img src="<?= base_url() ?>recursos/img/user.png" width="32" height="32"  class="user" alt="user">
                            <?= $_SESSION['nombreSesion'] ?></a>

                    <?php
                    }
                } else {
                    ?>
                    <a href="<?= base_url() ?>DojoController/cargarPag/inicio_sesion" class="font-weight-bold">
                        <img src="<?= base_url() ?>recursos/img/user.png" width="32" height="32"  class="user" alt="user">
                    </a>
                <?php
                }
                ?>
            </div>

        <!-- menu movil -->
        <!-- ------------------------------------------------------------- -->
        <div id="menu" class="position-absolute col-12 ">

            <div class="d-flex">
                <div class="logo-menu-movil col-11">
                    <div class="d-flex align-items-center justify-content-center col-12 mb-4 ">

                        <h3 class="font-weight-bolder">Dojo Kyoku</h3>
                        <img src="<?= base_url() ?>recursos/img/kankuLogo.png" width="32" height="32"  class="kankulogo" alt="kanku">
                    </div>

                </div>
                <div class="cerrar col-1 d-flex justify-content-center align-items-start">
                    <img src="<?= base_url() ?>recursos/img/close.png" width="20" height="20" class="cerrar" alt="cerar">

                </div>
            </div>



            <div class="menu-movil ml-5">

                <ul id="lista-menu" class="list-unstyled ">
                    <li><a class="nav-item nav-link mr-lg-4 mr-md-2" href="<?= base_url() ?>DojoController/cargarPag/home">INICIO</a></li>
                    <li><a class="nav-item nav-link mr-lg-4 mr-md-2" href="<?= base_url() ?>DojoController/cargarPag/grados">GRADOS</a></li>
                    <li><a class="nav-item nav-link active mr-lg-4 mr-md-2 text-danger" href="<?= base_url() ?>DojoController/cargarPag/horarios">HORARIOS</a></li>
                    <li><a class="nav-item nav-link mr-lg-4 mr-md-2" href="<?= base_url() ?>DojoController/cargarPag/contacto">CONTACTO</a></li>
                    <li><a class="nav-item nav-link mr-lg-4 mr-md-2" href="<?= base_url() ?>DojoController/cargarPag/nosotros">NOSOTROS</a></li>

                </ul>
            </div>

            <div class="col-12 ">
                <img src="<?= base_url() ?>recursos/img/menu_movil.png" class="w-100" alt="imagen">

            </div>
        </div>
        <!-- ------------------------------------------------------------- -->
        </div>

        <!-- cuerpo -->
        <div id="contenedor" class="cuerpo m-auto p-0 d-flex align-items-stretch">

            <!-- div izquierdo ------------------------------------------------- -->
            <div class="kanji_izq col-2 d-md-flex justify-content-around flex-column">
                <img src="<?= base_url() ?>recursos/img/letras-min.png" width="80" height="292" alt="kanji">

            </div>
            <!-- fin div izquierdo ------------------------------------------------- -->

            <!-- div centro ------------------------------------------------- -->
            <div class="centro col-md-8  mb-5">

                <!-- horario -->
                <div class="horario col-12 p-3 ">
                    <p class="col-12 font-weight-bold text-center ">
                        Horario
                    </p>

                    <div class="col-12 mb-3 d-flex flex-wrap justify-content-center ">

                        <div class="col-sm-8 col-md-5 text-center text-md-left mb-sm-4">
                            <h6 class="">HORARIO ADULTOS</h6>
                            <p></p>
                            <p>Lunes a viernes</p>
                            <p>Mañanas</p>
                            <p> De 10:00 a 11:00</p>
                            <p>De 11:30 a 12:30</p>
                            <p></p>
                            <p>Tardes</p>
                            <p>De 19:30 a 20:30</p>
                        </div>

                        <div class="col-sm-8 col-md-5 text-center text-md-left">
                            <h6 class="">HORARIO NIÑOS</h6>
                            <p></p>
                            <p>Lunes a viernes</p>
                            <p>Tardes</p>
                            <p> De 17:00 a 18:00</p>
                            <p> De 18:15 a 19:15</p>

                        </div>
                    </div>


                    <img src="<?= base_url() ?>recursos/img/belts+cover-min.jpg" class="w-100 m-auto" alt="imagen">
                </div>
            </div>
            <!-- fin div centro ------------------------------------------------- -->

            <!-- div derecho ------------------------------------------------- -->
            <div class="kanji_drcho col-2 d-md-flex justify-content-around flex-column">
                <img src="<?= base_url() ?>recursos/img/letras-min.png" width="80" height="292" alt="kanji">


            </div>
            <!-- fin div derecho ------------------------------------------------- -->

        </div>
        <!-- fin de cuerpo -->

