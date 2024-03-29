<body>

    <div class="container-fluid m-auto" style="max-width: 1100px;">


        <div class="cabecera_escritorio row mb-4">

            <div class="col-xl-9 col-md-8 p-0">

                <div class="d-flex align-items-center justify-content-center col-7 ml-auto">
                    <img src="<?= base_url() ?>recursos/img/kanku-min.png" width="32" height="32" class="kanku" alt="kanku">
                    <h1 class="font-weight-bolder">Dojo Kyoku</h1>
                </div>

                <nav class="navbar navbar-expand navbar-light ml-auto mr-xl-4 p-0 mt-4">
                    <div class="nav navbar-nav d-flex ml-md-auto font-weight-bold ">
                        <a class="nav-item nav-link mr-lg-4 mr-md-2" href="<?= base_url() ?>DojoController/cargarPag/home">INICIO </a>
                        <a class="nav-item nav-link mr-lg-4 mr-md-2" href="<?= base_url() ?>DojoController/cargarPag/grados">GRADOS</a>
                        <a class="nav-item nav-link mr-lg-4 mr-md-2" href="<?= base_url() ?>DojoController/cargarPag/horarios">HORARIOS</a>
                        <a class="nav-item nav-link active mr-lg-4 mr-md-2  bg-danger text-white" href="<?= base_url() ?>DojoController/cargarPag/contacto">CONTACTO</a>
                        <a class="nav-item nav-link mr-lg-4 mr-md-2" href="<?= base_url() ?>DojoController/cargarPag/nosotros">NOSOTROS</a>
                    </div>
                </nav>
            </div>

            <div id="user" class="d-flex justify-content-start ml-xl-auto mr-xl-4 pt-1">

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
        <div class="cabecera_movil row mb-3 pt-2 ">
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
                            <img src="<?= base_url() ?>recursos/img/user.png" width="32" height="32" class="user" alt="user">
                            <?= $_SESSION['nombreSesion'] ?></a>

                    <?php
                    } else {

                    ?>
                        <a href="<?= base_url() ?>DojoController/cargarPag/misDatos" class="font-weight-bold mt-2">
                            <img src="<?= base_url() ?>recursos/img/user.png" width="32" height="32" class="user" alt="user">
                            <?= $_SESSION['nombreSesion'] ?></a>

                    <?php
                    }
                } else {
                    ?>
                    <a href="<?= base_url() ?>DojoController/cargarPag/inicio_sesion" class="font-weight-bold">
                        <img src="<?= base_url() ?>recursos/img/user.png" width="32" height="32" class="user" alt="user">
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
                            <img src="<?= base_url() ?>recursos/img/kankuLogo.png" width="32" height="32" class="kankulogo" alt="kanku">
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
                        <li><a class="nav-item nav-link mr-lg-4 mr-md-2" href="<?= base_url() ?>DojoController/cargarPag/horarios">HORARIOS</a></li>
                        <li><a class="nav-item nav-link active mr-lg-4 mr-md-2 bg-danger text-white" href="<?= base_url() ?>DojoController/cargarPag/contacto">CONTACTO</a></li>
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
            <div class="centro col-md-8 mb-4">

                <!-- contacto -->
                <div class="contacto col-12 p-3 text-center font-weight-bold ">
                    <p class="col-12 ">

                        Kyokushin Karate es famoso por ser uno de los subestilos «más duros» del Karate. Este estilo de
                        Karate permite el combate por contacto completo (kumite) y no utiliza ningún equipo de
                        protección, excepto un protector bucal y una protección para la ingle.
                    </p>
                    <p>
                        Ni siquiera usan guantes o tocados protectores durante los eventos de combate de torneos.
                        Kyokushin no practica entrenamientos «deportivos» al estilo olímpico.

                    </p>

                    <p>Contactanos para mas informacion</p>
                    <p>Av. Juan Carlos I nº26<br />
                        29680 Estepona</p>
                    <p>Tel 666998423</p>

                    <div class="col-9 m-auto mb-3 text-left">

                        <form class="d-flex flex-column justify-content-center" action="" method="post">

                            <label class="labEscritorio" for="nombre">Su nombre(requerido)</label>
                            <input type="text" name="nombre" id="nombre" placeholder="Su nombre(requerido)" required>

                            <label class="labEscritorio" for="email">Su email(requerido)</label>
                            <input type="email" name="email" id="email" placeholder="Su email(requerido)" required>

                            <label class="labEscritorio" for="mensaje">Su mensaje</label>
                            <textarea name="mensaje" id="mensaje" cols="30" rows="5" placeholder="Su mensaje(requerido)"></textarea>

                            <p class="align-self-center mt-3">
                                <!--  <input type="checkbox" name="terminos" id="privacidad">
                                <label for="privacidad">Aceptar politica de privacidad</label> -->
                            </p>

                            <button type="submit" class="boton col-5 align-self-center btn btn-danger">Enviar</button>

                        </form>


                    </div>
                    <iframe id="inlineFrameExample" title="Inline Frame Example" width="0" height="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d130613279.7980936!2d-100.64509145647183!3d-2.5065518346153697!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xb09dff882a7809e1%3A0xb08d0a385dc8c7c7!2sAnt%C3%A1rtida!5e0!3m2!1ses!2ses!4v1607345230155!5m2!1ses!2ses">
                    </iframe>

                    <iframe class="embed-responsive mt-3 h-50" 
                    src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d1605.1240986352943!2d-5.156231951302701!3d36.427380748582955!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sAv.%20Juan%20Carlos%20I%20n%C2%BA26%2029680%2C%20M%C3%A1laga%2C%20Estepona!5e0!3m2!1ses!2ses!4v1639589974368!5m2!1ses!2ses" 
                    width="600" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </iframe>

                </div>


            </div>
            <!-- fin div centro ------------------------------------------------- -->

            <!-- div derecho ------------------------------------------------- -->
            <div class="kanji_drcho col-2 d-md-flex justify-content-around flex-column ">
                <img src="<?= base_url() ?>recursos/img/letras-min.png" width="80" height="292" alt="kanji">


            </div>
            <!-- fin div derecho ------------------------------------------------- -->

        </div>
        <!-- fin de cuerpo -->