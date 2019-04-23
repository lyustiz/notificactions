// incluir la libreria de boottrap verificando existencia de 
// popper.js y jquery
try {

    window.Popper = require('popper.js').default;
    window.$ = window.jQuery = require('jquery');
    
    
    require('bootstrap');
    require('jquery-ui');


} catch (e) {

    console.error('Se requiere popper.js y jquery para el correcto funcionamiento de Bootstrap');
}

// obtener el CFRS token y configurar los headers de AJAX de jquery 
let token = document.head.querySelector('meta[name="csrf-token"]');

if (token) {

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': token.content
        }
    });

} else {

   console.error('CSRF token not found');

}
