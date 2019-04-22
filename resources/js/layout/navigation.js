;

// CAMBIOS DEL DISE;O EN DEL MENU EN APERTURA/CIERRE

    // - muestra el fondo azul del menu
    // - cambia el icono de menu a cerrar
    // - cambia el color de gradient a blanco letras azules
    $('#main-menu').on('show.bs.collapse', function () 
    {
        $('.navbar').addClass('navbar-show').removeClass('navbar-hide');
        
        $('.navbar-toggler i').addClass('tlp-icon-close').removeClass('tlp-icon-menu');

        $('.btn-register').addClass('btn-register-white');
        
    })

    // - oculta el fondo azul del menu
    // - cambia el icono de cerrar a menu
    // - cambia el color de  blanco a gradient letras blancas
    $('#main-menu').on('hidden.bs.collapse', function () 
    {
        $('.navbar').addClass('navbar-hide').removeClass('navbar-show');

        $('.navbar-toggler i').addClass('tlp-icon-menu').removeClass('tlp-icon-close');
        
        $('.btn-register').removeClass('btn-register-white');
    })