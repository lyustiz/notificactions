
const CACHE_STATIC  = 'tulopagas-static-1.0';
const CACHE_DYNAMIC = 'tulopagas-dynamic-1.0';


let urlsToCache = [
    '/',
    '/css/main.css',
    '/js/landing.js',
    '/images/logo-blanco-magenta.png',
    '/images/google_play.png',
    '/images/app_store.png',
    '/img/smartphone-quees.png',
    '/img/qr.svg',
    '/img/smartphone.svg',
    '/img/pc.svg',
    '/img/wifi.svg',
    '/img/coin.svg',
    '/img/card.svg',
    '/img/marca_tulopagas.png',
    '/img/mastercard.png',
    '/img/QR_mastercard.png',
    '/img/ilustracion-como-funciona.png',
    '/img/consumidor.png',
    '/img/comercio.png',
    '/img/ingenio-icon.png',
    '/img/home-smartphone.png',
    '/img/landing_background.png',
    '/fonts/vendor/font-awesome/fontawesome-webfont.woff2?af7ae505a9eed503f8b8e6982036873e',
    '/fonts/Nunito-Regular.ttf?dba92cb9dc60f9f35cbf62428afd3ac1',
    '/fonts/nunito/Nunito-Bold.ttf',
    '/mix-manifest.json'
  ];

//instalacion del service worker
// apertura de la cache y almacenado de archivos
self.addEventListener('install', (eventInstall) => {

    //cacheo los elementos principales de la pagina 
    let cacheStatic = caches.open(CACHE_STATIC)
    .then( (cache)=>{

        return cache.addAll(urlsToCache);
    })
    .catch( (err) =>{
        
        console.log('Cache error:', err);
    })
    
    eventInstall.waitUntil(cacheStatic);

})

// interceptar todas las peticiones
self.addEventListener('fetch', (eventFetch)=> {

    //verificar que todas las peticiones estan en la cache
    let dataResponse = caches.match(eventFetch.request)
    .then( (response) => { 
        
        //si estan en la cache las devuelvo sin pedirlas
        if(response)
        {
            return response;
        }

        //sino busco los recursos en la web
        //return fetch(eventFetch.request)
        return fetch(eventFetch.request)
        .then( (newRequest) => {

            caches.open(CACHE_DYNAMIC)
            .then( (cache)=> {
                // coloco todo los objetos en la cache dinamica
                //if(eventFetch.request.url.includes('.css'))
                
                cache.put(eventFetch.request, newRequest);
            })

            //clono el request para el siguiente fetch
            return newRequest.clone()
        })
    })

    // responde con los objetos en cache o los remotos
    eventFetch.respondWith(dataResponse);

})
