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





    /* ---------------------------------------------------------------------- */
});