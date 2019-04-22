
// Boton flotante
// Al hacer click la pagina sube al inicio 


    if($("#button-float"))
    {
        $("#button-float").hide()
    
        $(window).scroll(function() {

            //valido cuando el desplazamiento  sea mayor a 220 muestra el boton sino se oculta
            if ($(this).scrollTop() > $('#what-is').offset().top-200) {

                $("#button-float").fadeIn(duration)
            } else { 

                $("#button-float").fadeOut(duration)
            }
        })

        $("#button-float").click(function (event) {
            event.preventDefault();
            $('html, body').animate({scrollTop: 0 }, duration)

            return false;
        })
    }
    