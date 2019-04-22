;

// actualizacion del texto informativo segun el icono de la animacion seleccionada
let temporalText = 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat'

    let whatIsList = {
                'qr':   { 
                            title: 'Info QR',
                            text: temporalText
                        },
                'smartphone': { 
                            title: 'Info smartphone',
                            text: temporalText
                        },
                'pc':   { 
                            title: 'Info pc',
                            text: temporalText
                        },
                'wifi': { 
                            title: 'Info wifi',
                            text: temporalText
                        },
                'coin': { 
                            title: 'Info QcoinR',
                            text: temporalText
                        },
                'card': { 
                            title: 'Info card',
                            text: temporalText
                        },
                };
    
    $('.sphere-icon').each(function(index) {

        let section = this.getAttribute('section')
    
        // cambio del texto en evento mouseover
        this.addEventListener('mouseover', () => 
        {
            $('.what-is-article-title').text(whatIsList[section].title);
            $('.what-is-article-text').text(section + ' ' + whatIsList[section].text);
        })
    });