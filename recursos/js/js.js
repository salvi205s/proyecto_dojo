$(document).ready(function () {

    /* desplegar menu hamburguesa  */
    $(".cabecera_movil > div:nth-child(1) > img:nth-child(1)").click(function (e) {

        $("#menu").css({ "display": "block" });
        $("#menu").stop().css({ "left": "0" }, 500);

    });

    /* crrear el menu de movil */
    $("img.cerrar").click(function (e) {

        $("#menu").stop().css({ "left": "-200vw" }, 500);

    });

    /* ------------------------------------------------------------------------ */

    /* flecha volver arriba */
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

    /* ------------------------------------------------------------------------------ */
    //cabecera fija
    $(window).scroll(function () {
        if ($(window).scrollTop() > 5) {

            $('div.cabecera_movil').css({
                "position": "fixed",
                "width": "100%",
                "opacity": "0.9",
                "z-index": "100"
            });


        } else if ($(window).scrollTop() === 0) {

            $('div.cabecera_movil').css({
                "position": "static",
                "opacity": "1",
                "width": "106%",

            });

        }
    });



    /* ---------------------------------------------------------------------- */
});