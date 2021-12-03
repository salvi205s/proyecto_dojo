$(document).ready(function () {

    /* desplegar menu hamburguesa  */
    $(".cabecera_movil > div:nth-child(1) > img:nth-child(1)").click(function (e) {



        $("#menu").css({ "display": "block" });
        $("#menu").stop().animate({ "left": "0" }, 500);
        $("body").css({ "overflow": "hidden" });

    });

    /* crrear el menu de movil */
    $("img.cerrar").click(function (e) {

        $("#menu").stop().animate({ "left": "-100vw" }, 500);
        $("body").css({ "overflow": "scroll" });

    });


    $(window).scroll(function () {

        if ($(window).scrollTop() > 1) {

            $("a#go-up").css("display", "block");

            $("a#go-up").click(function (e) {
                $("html, body").stop().animate({ "scrollTop": "0" }, 800);
                // console.log("arriba");
            });
            $("a#go-up").css("opacity", "0.5");


        } else if ($(window).scrollTop() === 0) {
            $("header").css({
                "opacity": "1"
            });

            $("a#go-up").css("display", "none");

        }
    });


    /* Tabla de clientes */
    /* ---------------------------------------------------------------------- */

    $('#example').DataTable();

    //funcion que recibe el id del usuario que se va a borrar, muestra el texto de confirmacion
    //y inserta la url del metodo borrar al boton del modal
    obtenerId = function (id) {
        $("#confirmaBorrar").text("Esta seguro que desea borrar al usuario con id " + id);
        $('#modalBorrar').attr('href', "<?= base_url() ?>TablaDatosController/borrar_usuario/" + id);

    }

    //funcion que recibe en el boton de editar(onclick) los valores del usuario, y los inserta en el formulario de editar
    // y manda la url del metodo editar al boton del modal
    obtenerDatos = function (id, nombre, DNI, email, edad, horario, numero_cuenta) {
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



    /* ---------------------------------------------------------------------- */
});