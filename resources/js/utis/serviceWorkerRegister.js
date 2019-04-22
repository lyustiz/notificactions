;

if(navigator.serviceWorker)
{
    window.addEventListener('load', event => 
    {
        navigator.serviceWorker.register('/sw.js')
        .then( register => 
        {
            console.info('serviceWorker Registered');
        })
        .catch( err =>
        {
            console.error(err)
        });
    });
}
else
{
    console.info('Navegador no soporta Services Worker')
}
