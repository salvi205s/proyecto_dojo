<?php
if (!isset($_SESSION['nombreSesion'])) {
    redirect("DojoController", "location");
}
?>

<body>

    <div id="tabladatosContainer" class=" m-auto">


        <div class="cabecera_escritorio row mb-4">

            <div class="col-xl-9 col-md-8 p-0">

                <div class="d-flex align-items-center justify-content-center col-7 ml-auto">
                    <img src="<?= base_url() ?>recursos/img/kanku-min.png" width="32" height="32" class="kanku" alt="kanku">

                    <h1 class="font-weight-bolder">Dojo Kyoku</h1>
                </div>

                <nav class="navbar navbar-expand navbar-light ml-auto mr-xl-4 p-0 mt-4">
                    <div class="nav navbar-nav d-flex ml-md-auto font-weight-bold ">
                        <a class="nav-item nav-link mr-lg-4 mr-md-2" href="<?= base_url() ?>index.php/DojoController/cargarPag/home">INICIO </a>
                        <a class="nav-item nav-link mr-lg-4 mr-md-2" href="<?= base_url() ?>index.php/DojoController/cargarPag/grados">GRADOS</a>
                        <a class="nav-item nav-link mr-lg-4 mr-md-2" href="<?= base_url() ?>index.php/DojoController/cargarPag/horarios">HORARIOS</a>
                        <a class="nav-item nav-link mr-lg-4 mr-md-2" href="<?= base_url() ?>index.php/DojoController/cargarPag/contacto">CONTACTO</a>
                        <a class="nav-item nav-link mr-lg-4 mr-md-2" href="<?= base_url() ?>index.php/DojoController/cargarPag/nosotros">NOSOTROS</a>
                    </div>
                </nav>
            </div>

            <div id="user" class="d-flex justify-content-start ml-xl-auto mr-xl-5 pt-1">

                <div class="d-flex align-items-end" id="silueta-cont">
                    <img src="<?= base_url() ?>recursos/img/Karate_silhouette-min.png" width="100" height="111" class="silueta" alt="silueta karate">

                </div>

                <div id="userIni" class="d-flex align-items-start h-25">
                    <img src="<?= base_url() ?>recursos/img/user.png" width="32" height="32" class="user" alt="user">
                    <a href="<?= base_url() ?>TablaDatosController/listarTabla" class="font-weight-bold mt-2"><?= $_SESSION['nombreSesion'] ?></a>

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

                    if ($_SESSION['tipo'] == "admin") {
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
        <div id="contenedorTabla" class="cuerpo m-auto p-0 d-flex align-items-stretch">

            <!-- div centro ------------------------------------------------- -->
            <div class="centro col-12 mb-4 mb-5">

                <!-- contacto -->
                <div class="contacto col-12 p-3 text-center font-weight-bold ">

                    <h1 class="font-weight-bold">Tabla Clientes</h1>
                    <span class="text-danger">
                        <?php
                        if (isset($_SESSION['errorHorario'])) {
                            echo "No puedes ir a ese horario, consulta los horarios";
                        }
                        if (isset($_SESSION['errorRegistro'])) {
                            echo "No se ha podido añadir al cliente revise los datos introducidos";
                        }
                        ?>
                    </span>


                    <table id="example" class="table table-striped table-bordered table-responsive nowrap " style="width:100%">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>DNI</th>
                                <th>Email</th>
                                <th>Edad</th>
                                <th>Horario</th>
                                <th>Número cuenta</th>
                                <th>Estado</th>
                                <th>Fecha inicio</th>
                                <th>Acciones</th>

                            </tr>
                        </thead>

                        <tbody class="bg-bg-white">
                            <?php

                            foreach ($listaClients as $i) {

                            ?>

                                <tr>
                                    <td><?= $i->idCliente ?></td>
                                    <td><?= $i->nombre ?></td>
                                    <td><?= $i->DNI ?></td>
                                    <td><?= $i->email ?></td>
                                    <td><?= $i->edad ?></td>
                                    <td><?= $i->idClase ?></td>
                                    <td><?= $i->nunCuenta ?></td>
                                    <td><?= $i->estado ?></td>
                                    <td><?= $i->fechaInicio ?></td>
                                    <td>
                                        <button type="submit" onclick="obtenerId(<?= $i->idCliente ?>)" class="btn btn-primary" data-toggle="modal" data-target="#borrarModal">
                                            Borrar
                                        </button>
                                        -
                                        <!-- boton submit que abre un modal y llama al metodo obtenerDatos, que recibe los datos del usuario, para mostrarlos en el modal -->

                                        <button type="button" onclick="obtenerDatos(<?= $i->idCliente ?>, '<?= $i->nombre ?>','<?= $i->DNI ?>','<?= $i->email ?>', '<?= $i->edad ?>','<?= $i->idClase ?>', '<?= $i->nunCuenta ?>')" class="btn btn-primary" data-toggle="modal" data-target="#editModal">
                                            Editar
                                        </button>
                                    </td>
                                </tr>

                            <?php
                            }

                            ?>


                        </tbody>

                    </table>

                </div>

                <div class="d-flex col-12 mb-5">

                    <button type="button" id="btnAdd" class="boton  mt-3 mr-auto btn btn-danger" data-toggle="modal" data-target="#addModal">
                        Añadir cliente
                    </button>


                    <?php
                    echo form_open('MisDatosController/cerrar_sesion')
                    ?>
                    <button type="submit" class="boton  mt-3 ml-auto btn btn-danger ">Cerrar sesión</button>

                    </form>
                </div>


            </div>
            <!-- fin div centro ------------------------------------------------- -->


        </div>
        <!-- fin de cuerpo -->

        <!-- pie de pagina ----------------------------------------------------------------------- -->
        <footer class="mt-5 ">

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
            <img src="<?= base_url() ?>recursos/img/down-arrow.png" width="64" height="64" alt="ir hacia arriba">
        </a>


    </div>
    <!-- -------------------------------------------------------------------------------------------------------- -->
    <!-- Modal añadir-->
    <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="addModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">

                <div class="modal-body">

                    <h2>Formulario de registro</h2>

                    <form class="d-flex flex-column align-items-center col-12" action="<?= base_url() ?>TablaDatosController/add_usuario" method="post">

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
                        <input class="mb-2 col-11" type="password" name="clave" id="clave"  placeholder="Contraseña" required>

                        <label class="labEscritorio col-12" for="claveRep">Repita la contraseña</label>

                        <input class="mb-2 col-11" type="password" name="claveRep" id="claveRep"  placeholder="Repita Contraseña" required>

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

                    </form>
                </div>

                <div class="modal-footer">
                    <!-- <a href="<?= base_url() ?>listar_controller/add_usuario" class="btn btn-primary">Añadir usuario</a> -->
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar modal</button>
                </div>
            </div>
        </div>
    </div>
    <!-- -------------------------------------------------------------------------------------------------------- -->
    <!-- Modal editar-->
    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">

                <div class="modal-body">

                    <h2 id="info_editar"> </h2>
                    <form id="modalEditar" action="" method="POST">

                        <label class="labEscritorio col-12" for="nombre_edit">Nombre</label>
                        <input type="text" class="mb-2 col-11" name="nombre_edit" id="nombre_edit" placeholder="nombre" value="<?php if (isset($_POST['nombre_edit'])) echo $_POST['nombre_edit'] ?>" required>

                        <label class="labEscritorio col-12" for="DNI_edit">DNI</label>
                        <input type="text" class="mb-2 col-11" name="DNI_edit" id="DNI_edit" pattern="(([X-Z]{1})([-]?)(\d{7})([-]?)([A-Z]{1}))|((\d{8})([-]?)([A-Z]{1}))" maxlength="9" placeholder="DNI" value="<?php if (isset($_POST['DNI_edit'])) echo $_POST['DNI_edit'] ?>" required>
                        <?php
                        if (isset($_SESSION['dni_no_valido'])) {
                            echo "<span class='text-danger'>El número de DNI no es correcto</span>";
                        }
                        if (isset($_SESSION['dni_repetido'])) {
                            echo "<span class='text-danger'>El DNI ya existe</span>";
                        }
                        ?>
                        <label class="labEscritorio col-12" for="clave">Contraseña</label>
                        <input class="mb-2 col-11" type="password" name="clave" id="clave"  placeholder="Contraseña" required>

                        <label class="labEscritorio col-12" for="claveRep">Repita la contraseña</label>

                        <input class="mb-2 col-11" type="password" name="claveRep" id="claveRep"  placeholder="Repita Contraseña" required>

                        <?php
                        if (isset($_SESSION['clavesIguales'])) {
                            echo "<span class='text-danger'>Las claves tienen que ser iguales</span>";
                        }
                        ?>
                        <label class="labEscritorio col-12" for="email_edit">Email</label>
                        <input class="mb-3 col-11" type="email" name="email_edit" id="email_edit" placeholder="email" value="<?php if (isset($_POST['email_edit'])) echo $_POST['email_edit'] ?>" required>

                        <div class="col-12 mb-3 d-flex pl-0">
                            <label class="col-2 " for="edad_edit">Edad</label>

                            <select class="" name="edad_edit" id="edad_edit">

                                <?php
                                for ($i = 10; $i <= 90; $i++) {
                                ?>
                                    <option value="<?= $i ?>" <?php if (isset($_POST["edad_edit"]) && $_POST["edad_edit"] ==  $i) echo "selected"; ?>><?= $i ?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>

                        <div class="col-12 mb-3 d-flex">
                            <label for="horario_edit"><strong>Horario:</strong></label>
                            <select class="ml-2 " name="horario_edit" id="horario_edit">
                                <option value="1" <?php if (isset($_POST["horario_edit"]) && $_POST["horario_edit"] == "1") echo "selected"; ?>>10:00 a 11:00, 2 días 30€</option>
                                <option value="2" <?php if (isset($_POST["horario_edit"]) && $_POST["horario_edit"] == "2") echo "selected"; ?>>11:30 a 12:30, 2 días 30€</option>
                                <option value="3" <?php if (isset($_POST["horario_edit"]) && $_POST["horario_edit"] == "3") echo "selected"; ?>>17:00 a 18:00, 2 días 30€</option>
                                <option value="4" <?php if (isset($_POST["horario_edit"]) && $_POST["horario_edit"] == "4") echo "selected"; ?>>18:15 a 19:15, 2 días 30€</option>
                                <option value="5" <?php if (isset($_POST["horario_edit"]) && $_POST["horario_edit"] == "5") echo "selected"; ?>>19:30 a 20:30, 2 días 30€</option>
                                <option value="6" <?php if (isset($_POST["horario_edit"]) && $_POST["horario_edit"] == "6") echo "selected"; ?>>10:00 a 11:00, 3 días 35€</option>
                                <option value="7" <?php if (isset($_POST["horario_edit"]) && $_POST["horario_edit"] == "7") echo "selected"; ?>>11:30 a 12:30, 3 días 35€</option>
                                <option value="8" <?php if (isset($_POST["horario_edit"]) && $_POST["horario_edit"] == "8") echo "selected"; ?>>17:00 a 18:00, 3 días 35€</option>
                                <option value="9" <?php if (isset($_POST["horario_edit"]) && $_POST["horario_edit"] == "9") echo "selected"; ?>>18:15 a 19:15, 3 días 35€</option>
                                <option value="10" <?php if (isset($_POST["horario_edit"]) && $_POST["horario_edit"] == "10") echo "selected"; ?>>19:30 a 20:30, 3 días 35€</option>
                            </select>

                        </div>

                        <div class="col-12 mb-3  ">
                            <label class="labEscritorio" for="nCuenta_edit">Número de cuenta</label>
                            <input type="text" class="mb-2 ml-auto " name="nCuenta_edit" id="nCuenta_edit" placeholder="número de cuenta" value="<?php if (isset($_POST['nCuenta_edit'])) echo $_POST['nCuenta_edit'] ?>" required>
                        </div>

                        <p class="align-self-center mt-3">
                            <!--  <input type="checkbox" name="terminos" id="privacidad">
                                <label for="privacidad">Aceptar politica de privacidad</label> -->
                        </p>
                        <button type="submit" class="boton col-5  mb-3 align-self-center btn btn-danger">Enviar</button>

                    </form>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar modal</button>
                </div>
            </div>
        </div>
    </div>
    <!-- -------------------------------------------------------------------------------------------------------- -->
    <!-- -------------------------------------------------------------------------------------------------------- -->
    <!-- Modal borrar -->
    <div class="modal fade" id="borrarModal" tabindex="-1" role="dialog" aria-labelledby="borrarModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">

                <div id="confirmaBorrar" class="modal-body">
                    <p>

                    </p>
                </div>

                <div class="modal-footer">
                    <a href='' id="modalBorrar" class="btn btn-primary">Borrar</a>

                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar modal</button>
                </div>
            </div>
        </div>
    </div>
    <script src="<?= base_url() ?>recursos/js/js.js"></script>

</body>

</html>

<script>
    $(document).ready(function() {

        /* Tabla de clientes */
        /* ---------------------------------------------------------------------- */

        $('#example').DataTable();

        //funcion que recibe el id del usuario que se va a borrar, muestra el texto de confirmacion
        //y inserta la url del metodo borrar al boton del modal
        obtenerId = function(id) {
            $("#confirmaBorrar").text("Esta seguro que desea borrar al usuario con id " + id);
            $('#modalBorrar').attr('href', "<?= base_url() ?>TablaDatosController/borrar_usuario/" + id);

        }

        //funcion que recibe en el boton de editar(onclick) los valores del usuario, y los inserta en el formulario de editar
        // y manda la url del metodo editar al boton del modal
        obtenerDatos = function(id, nombre, DNI, email, edad, horario, numero_cuenta) {
            $('#info_editar').text("Editando al usuario con id " + id);
            $('#nombre_edit').val(nombre);
            $('#DNI_edit').val(DNI);
            /* $('#clave_edit').val(clave); */
            $('#email_edit').val(email);
            $('#nCuenta_edit').val(numero_cuenta);
            $('#modalEditar').attr('action', "<?= base_url() ?>TablaDatosController/editar_usuario/" + id);

            console.log(edad);

            /*  if (edad <18) {
 
         $('#edad_edit').val(edad);
 
     } else {
 
         $('#edad_edit').val('adulto');
 
     } */
            $("#edad_edit").val(edad);
            $('#edad_edit').change();

            $("#horario_edit").val(horario);
            $('#horario_edit').change();

            $("#horSemana_edit").val(horSemana);
            $('#horSemana_edit').change();

        }
    });
</script>