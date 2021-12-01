<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

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
                        <a class="nav-item nav-link active mr-lg-4 mr-md-2 bg-danger text-white"  href="#">INICIO</a>
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

                <div id="userIni" class="d-flex align-items-start h-25 ">

                    <?php

                    if (isset($_SESSION['nombreSesion'])) {

                        if ($_SESSION['tipo'] == "admin") {
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
                    <li><a class="nav-item nav-link active mr-lg-4 mr-md-2 text-danger" href="#">INICIO</a></li>
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
                <img src="<?= base_url() ?>recursos/img/letras2-min.png" alt="kanji">
                <img src="<?= base_url() ?>recursos/img/letras-min.png" alt="kanji">
            </div>
            <!-- fin div izquierdo ------------------------------------------------- -->

            <!-- div centro ------------------------------------------------- -->
            <div class="centro col-md-8">
                <!-- carousel 3 -->
                <!-- Carousel con controles e indicadores-->
                <div id="carousel-controles-indicadores" class="carousel slide mb-3" data-ride="carousel">

                    <ol class="carousel-indicators">
                        <li data-target="#carousel-controles-indicadores" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-controles-indicadores" data-slide-to="1"></li>
                        <li data-target="#carousel-controles-indicadores" data-slide-to="2"></li>
                    </ol>

                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="<?= base_url() ?>recursos/img/portada1-min.jpg" class="imgCarrousel d-block w-100 h-100" alt="portada1">
                        </div>
                        <div class="carousel-item">
                            <img src="<?= base_url() ?>recursos/img/portada2-min.jpg" class="imgCarrousel d-block w-100 h-100" alt="portada2">
                        </div>
                        <div class="carousel-item">
                            <img src="<?= base_url() ?>recursos/img/portada3-min.jpg" class="imgCarrousel d-block w-100 h-100" alt="portada3">
                        </div>
                    </div>

                    <!-- Controles -->
                    <a class="carousel-control-prev" href="#carousel-controles-indicadores" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carousel-controles-indicadores" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>

                </div>

                <!-- historia -->
                <div class="historia text-center p-3 d-flex justify-content-around flex-column">
                    <img src="<?= base_url() ?>recursos/img/oyama-min.jpg" class="w-75 m-auto" alt="kanji">
                    <a class="text-dark mb-3" href="https://commons.wikimedia.org/w/index.php?curid=32432485">
                        https://commons.wikimedia.org/w/index.php?curid=32432485
                    </a>

                    <p>
                        El fundador de Karate Kyokushinkai, Sosai Masutatsu Oyama, nació el 27 de julio de 1923 en un
                        pueblo
                        de Corea del Sur. A la edad de 9 años,
                        mientras se hospedaba en la granja de su hermana en Mandjuriya, comenzó a entrenar en Kenpo
                        chino y
                        en forma más particular “Las Dieciocho Manos”. En 1938,
                        Oyama se fue a Japón con la intención de inscribirse en una escuela de aviación para convertirse
                        en
                        piloto de jet, pero tuvo que renunciar a su sueño.
                        Continuó practicando judo y box, y su interés en las artes marciales lo llevó al dojo de Gichin
                        Funakoshi, donde comenzó a practicar Okinawa Karate.
                    </p>
                    <p>
                        Oyama avanzó rápidamente debido a su gran dedicación. Tenía solo 20 años cuando alcanzó el rango
                        de
                        4to Dan. En el mismo período de tiempo, Oyama se inscribió en el Ejército Imperial Japonés y
                        comenzó
                        a practicar Judo para dominar sus técnicas de agarre manual. En cuatro años, alcanzó el rango de
                        4to
                        Dan en Judo y terminó su entrenamiento.
                    </p>
                    <p>
                        Después de la derrota japonesa en la Segunda Guerra Mundial, Oyama, como cualquier joven
                        japonés,
                        recayó en angustia personal. Se las arregló para encontrar una salida a su desesperación
                        mientras
                        entrenaba con So Nei Chu, un maestro coreano en Goju-Ryu Karate. Este gran maestro famoso por la
                        fuerza de su cuerpo, así como por su profunda espiritualidad, tuvo un gran impacto en el joven
                        Mas
                        Oyama. El Maestro So le enseñó la adhesión de BUDO y los fundamentos espirituales del budismo.
                        Después de algunos años de entrenamiento, el Maestro So le aconsejó a Mas Oyama que hiciera un
                        voto
                        para dedicar su vida al Camino del Guerrero y que se recluyera en las montañas para entrenar su
                        mente y su cuerpo.

                    </p>

                    <p>
                        En octubre de 1946, Oyama comenzó a hacer ejercicio de forma aislada en la montaña Minobu. Solo
                        dos
                        meses después, se vio obligado a regresar a la civilización debido a la falta de suministros.

                    </p>

                    <p>
                        En septiembre de 1947, ganó sin reservas el Campeonato Abierto de Karate de Todo Japón. Sin
                        embargo,
                        esto para él no fue suficiente, y en 1948 Mas Oyama se retiró a la montaña Kiosumi, en la
                        prefectura
                        de Chiba. Fue seguido por otro aprendiz: Yashiro. El amigo / patrocinador Sr. Kayama les
                        suministró
                        comida todos los meses. A través de un entrenamiento vigoroso, Mas Oyama aprendió a superar la
                        ansiedad causada por la soledad, pero Yashiro no pudo hacer esto. Después de 6 meses, escapó,
                        dejando a Oyama solo. Dieciocho meses después, el Sr. Kayma informó a Masutatsu Oyama que,
                        debido a
                        circunstancias inesperadas, ya no podía apoyar las provisiones de alimentos para su aislamiento
                        en
                        las montañas. Como resultado, el plan original de Oyama para permanecer cortado durante tres
                        años
                        fue interrumpido prematuramente.

                    </p>

                    <p>
                        Después de regresar de su aislamiento, Oyama ganó nuevamente el Campeonato Abierto de Karate de
                        Todo
                        Japón. Su éxito fue seguido por muchas victorias en diferentes campeonatos marciales y torneos
                        con
                        reglas y regulaciones diferentes. Muchas veces, desafió a luchar sin maestros de reglas de
                        diferentes artes marciales, pero todos terminaron con una clara victoria de Oyama. De esta
                        manera,
                        practicó y perfeccionó su Karate.

                    </p>
                    <p>
                        Masutatsu Oyama abrió su primer dojo en 1953 en Meijiro, Tokio. Este era el momento en que la
                        fuerza
                        de Mas Oyama estaba en su punto más alto, y los entrenamientos en el dojo eran despiadados.
                        Muchos
                        de sus aprendices eran miembros de diferentes artes marciales, y Oyama comparó sus estilos y
                        formas
                        con su Karate. Adoptó las mejores técnicas y conceptos y los incorporó en sus entrenamientos. De
                        esta manera, estableció los cimientos del Kyokushin Karate. La formación de la organización
                        mundial
                        comenzó en 1960, y se inauguró oficialmente en julio de 1965. Fue nombrada Organización
                        Internacional de Karate (IKO). Fue en este momento cuando Oyama introdujo el nombre de su estilo
                        en
                        karate, Kyokushin (la verdad última), y comenzó a difundirlo por todo el mundo, creando una de
                        las
                        organizaciones de artes marciales más grandes del planeta. Debido a su contribución al
                        desarrollo
                        del karate, Oyama recibió el título de honor “Sosai”.

                    </p>
                    <p>
                        Kyokushin Karate demostró ser el estilo más duro y agresivo del karate. Muchos de sus discípulos
                        se
                        convirtieron en campeones en peleas con diferentes decisiones. Los luchadores de Kyokushin se
                        destacaron por su fuerza excepcional y su alto espíritu de lucha. Esto elevó la autoridad del
                        estilo
                        y ganó su reconocimiento en los círculos de artes marciales.
                    </p>
                </div>
                <!-- fin de historia -->

                <!-- palabra -->
                <div class="palabra text-center p-3 mt-3">

                    <h3 class="text-center">Kyokushin Karate</h3>
                    <p>
                        La palabra "Kyokushin" esta compuesta por dos ideogramas:
                        KYOKU: Esta palabra no existe en español, representa, el centro magnético que guía a las
                        brújulas,
                        ya que este ideograma no tiene una traducción real dentro de nuestra lengua, se puede traducir
                        como
                        polo, camino hacia, ruta a seguir. También se le otorga el sigificado de Último (a).

                    </p>

                    <h3 class="text-center">SHIN: Verdad</h3>
                    <p>
                        Por esto es normal que a Kyokushin se le traduzca como camino hacia la verdad o la última
                        verdad, no
                        significando, que Kyokushin Karate sea lo único verdadero, sino el camino que cada uno recorre
                        (Do)
                        dentro de su mundo (Su verdad).

                    </p>
                    <p>
                        Kyokushin Karate fue fundado por Masutatsu Oyama (más conocido como MAS OYAMA), buscando evitar
                        la
                        deportivización del Karate y dándole un mayor énfasis a su concepto como arte marcial (BUDO).

                    </p>
                    <p>
                        Kyokushin Karate es ante todo un arte marcial, cuyo principal objetivo es el desarrollo del ser,
                        se
                        caracteriza por requerir de sus participantes, un máximo de esfuerzo, para un máximo de
                        desarrollo,
                        una disciplina férrea y una fuerte voluntad, sobreponiéndose así al arduo entrenamiento,
                        llegando
                        así por medio de este a conocer sus cualidades y debilidades, podiendo asi explotar el maximo de
                        su
                        potencial y llevarlo siempre mas allá.

                    </p>
                    <p>
                        Dentro de Kyokushin Karate un punto muy importante es el combate con contacto, buscando por
                        medio de
                        este crear suficientes desafíos a superar, para así poder apreciar la verdadera dimensión de el
                        espíritu del ser humano. Esta forma de combate, es además la mejor forma de preparar nuestro
                        cuerpo
                        para una confrontación real.

                    </p>
                    <p>
                        Un claro ejemplo del concepto de Kyokushin es una de sus frases insignia dada por Sosai Oyama:

                    </p>
                    <p>
                        "... Mil días de práctica, un principiante; Diez mil días de práctica, UN MAESTRO".
                    </p>
                </div>

                <!-- fin de palabra -->

                <!-- kanku ------------------------------------------------ -->
                <div class="palabra text-center p-3 mt-3 mb-3">

                    <h3 class="text-center">Kanku</h3>
                    <p>
                        Kanku

                        El simbolo del Kyokushinkai es el Kanku. Este simbolo es derivado de la Kata Kanku, la cual
                        simula la contemplacion del cielo. En esta Kata las manos son elevadas para contemplar el cielo
                        atraves del espacio formado al juntar nuestras manos (unificacion del yin y yan), esta posicion
                        de las manos crea una figura llamada Kanku. Las puntas del Kanku representan los dedos de las
                        manos que implican "lo ultimo, o la cuspide,la cima. las secciones anchas representan la munecas
                        de las manos que implican"poder". El centro representa "infinidad" lo cual implica
                        "profundidad"(en cuanto a conocimiento). el simbolo completo del Kanku esta basado y encerrado
                        por un circulo, representando "continuidad y movimiento circular"

                    </p>


                </div>
            </div>
            <!-- fin div centro ------------------------------------------------- -->

            <!-- div derecho ------------------------------------------------- -->
            <div class="kanji_drcho col-2 d-md-flex justify-content-around flex-column align-items-center">
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