window.axios = require('axios');

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

let token = document.head.querySelector('meta[name="csrf-token"]');

if (token) 
{
    window.axios.defaults.headers.common['X-CSRF-TOKEN'] = token.content;
    //window.axios.defaults.baseURL = 'http://myurl';
    window.axios.defaults.headers.post['Content-Type'] ='application/json;charset=utf-8';
    window.axios.defaults.headers.post['Content-Type'] ='application/x-www-form-urlencoded';
    window.axios.defaults.headers.post['Access-Control-Allow-Origin'] = '*';
} 
else 
{
    console.error('CSRF token not found: https://laravel.com/docs/csrf#csrf-x-csrf-token');
}