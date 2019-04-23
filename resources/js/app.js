/** Plugins **/
import './plugins/axios'
import './config'


let auth        = 'J0F1HLWUZjJgkLvzTsduCq6cgv0b5I50Ws0d6q6X29YuyPvmKL8UiDwC0jm4MWCCjgv1FzXKAJIaZOZjXjdm';
let base_url    = 'https://cp.pushwoosh.com/json/1.3/';
let endPointUrl = 'createMessage';



$(document).ready(function() {

    $.fn.eventos();
    $('#formPush').trigger("reset");
    
});

/************ VALIDACION  *****************/



/****** EVENTOS *******/

$.fn.eventos = function(){

	$('#formPush').unbind('change');
	$('#formPush').on("change", function(e) {
		
		var code = e.keyCode || e.which; 
		
		if (code === 13) {               
			e.preventDefault();
			return false;
		}
		
    });
    
    $('#slt-apps').unbind('change');
	$('#slt-apps').on("change", function(e) {
        
	   
		
    });
    

    $('#btn-send').unbind('click');
    $('#btn-send').on("click", function(e) {
        




        let data =     {
                        "request": {
                          "application": $('#slt-apps').val(), 
                          "auth": auth, 
                          "notifications": [
                            {
                              "send_date": "now",  // required. YYYY-MM-DD HH:mm OR 'now'
                              "ignore_user_timezone": false, 
                              "timezone": "America/Caracas", 
                              "content": { 
                                "en": $('#txa_msj_push').val(),
                                "es": $('#txa_msj_push').val(),
                              },
                              "transactionId": "6e22a9af-84e4-46e6-af16-e457a4a6e7e6",  
                              "platforms": [Number($('.rad_plataform:checked').val())], // optional.    
                      
                              //filters
                              // "filter": "FILTER_NAME", // optional   
                            }
                          ]
                        }
                      }

        if($.fn.validate())
        {
            console.log('enviando', data)
            $.fn.sendRequest(data, endPointUrl)
            
        }
	   
		
    });
    
    
	


}



/********* AJAX ***********/

$.fn.validate = function()
{
   if( ! $('#slt-apps').val() )
   {
       alert('Seleccione Aplicacion')
       return false
   }

   if( $('.rad_plataform:checked').length < 1 )
   {
       alert('Seleccione Plataforma')
       return false
   }

   if( ! $('#txa_msj_push').val() )
   {
       alert('Indique Mensaje')
       return false
   }

   return true
}

$.fn.sendRequest = function(data, endPointUrl){

    

    fetch(base_url + endPointUrl, {
        method: 'POST', // or 'PUT'
        body: JSON.stringify(data), // data can be `string` or {object}!
        mode: 'cors',
        headers:{
          'Content-Type': 'application/x-www-form-urlencoded'
        }
      }).then(res => res.json())
        .then(response => console.log('Success:', response))
      .catch(error => console.error('Error:', error))
      

      /*
    fetch('http://example.com/movies.json')
    .then(function(response) {
      return response.json();
    })
    .then(function(myJson) {
      console.log(myJson);
    });

    /*$.ajax({
        url: base_url + endPointUrl,
        method: "POST",
        data: data })
      .done(function(data) {
        console.log('success', data) 
      })
      .fail(function(xhr) {
        console.log('error', xhr);
      });
    
    /*
    axios.post(base_url+endPointUrl, data)
    .then(respuesta => {
        console.log( respuesta.data );
    })
    .catch(error => {
        console.log( respuesta.data );   
    })*/

}















