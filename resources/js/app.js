/** Plugins **/
import './config'


let auth        = 'J0F1HLWUZjJgkLvzTsduCq6cgv0b5I50Ws0d6q6X29YuyPvmKL8UiDwC0jm4MWCCjgv1FzXKAJIaZOZjXjdm';
let base_url    = 'https://cp.pushwoosh.com/json/1.3/';
let endPointUrl = 'createMessage';

$(document).ready(function() {

    $.fn.eventos();
    $('#formPush').trigger("reset");

});







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

    

    $('#btn-send').unbind('click');
    $('#btn-send').on("click", function(e) {
        

        let application = $.fn.getApplication();
        let platforms   = $.fn.getPlataforms();
        let send_date   = $.fn.getSendDate();
        let message     = $.fn.getMessage();
        let filters     = $.fn.getFilters();
        let UUID        = $.fn.getUUID();
   
        let data =     {
                    "request": {
                      "application": application, 
                      "auth": auth, 
                      "notifications": [
                        {
                          "send_date": send_date,  // required. YYYY-MM-DD HH:mm OR 'now'
                          "ignore_user_timezone": false, 
                          "timezone": "America/Caracas", 
                          "content": { 
                            "en": message,
                          },
                          "transactionId": UUID,  
                          "platforms": platforms, // optional.    
                  
                        }
                      ]
                    }
                  }

        if(filters.length > 0)
        {
            data.request.notifications['filter'] = filters;
        }

        if($.fn.validate())
        {
            console.log('enviando', data)
            $.fn.sendRequest(data, endPointUrl)
            
        }
	   
		
    });
    
}

/********* FUNCTIONS ***********/


$.fn.resetForm = function()
{
    $('#formPush').trigger("reset");
  
}

$.fn.getApplication = function()
{
    return $('#slt-apps').val();
}

$.fn.getPlataforms = function()
{
    let plataforms = [];

    $('.chk_plataform:checked').each(function(index, item) {

        let values = $(item).val();
    
        if( values.includes(',') ) 
        {
            values = values.split(',');
        }
    
        plataforms.push(...values);
        
    });

    return plataforms; 
}

$.fn.getSendDate = function()
{
    if( $('#schedule-date').val() && $('#schedule-time').val())
    {
        return $('#schedule-date').val() + ' ' + $('#schedule-time').val();
    }

    return 'now';
}

$.fn.getMessage = function()
{
    return $('#txa_msj_push').val();
    
}

$.fn.getFilters = function()
{
    let filters = [];

    $('.chk-filters:checked').each(function(index, item) {

        filters = $(item).val();
        
    });
    
    return filters; 
}

$.fn.getUUID = function(data, endPointUrl){

    var dt = new Date().getTime();
    var uuid = 'xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx'.replace(/[xy]/g, function(c) {
        var r = (dt + Math.random()*16)%16 | 0;
        dt = Math.floor(dt/16);
        return (c=='x' ? r :(r&0x3|0x8)).toString(16);
    });
    return uuid;
  }
  
  $.fn.sendRequest = function(data, endPointUrl){

    $('loading').show();

    fetch(base_url + endPointUrl, {
        method: 'POST', // or 'PUT'
        body: JSON.stringify(data), // data can be `string` or {object}!
        mode: 'cors',
        headers:{
          'Content-Type': 'application/x-www-form-urlencoded'
        }
      }).then(res => res.json())
        .then(response => {


          if(response.status_code == 200)
          {
            $.fn.showMessage('Envio del Mensaje '+response.status_message, 'success')
            $('#formPush').trigger("reset");
          }
          else {
            $.fn.showMessage('No se envio el Mensaje: '+response.status_message, 'error')
          }
          $('loading').hide();
        })
      .catch(error => {
        $.fn.showMessage(error, 'error')
        console.log(error)
        $('loading').hide();
      })
        
      
}
/*
{
    "request":{
      "auth": "yxoPUlwqm…………pIyEX4H", // API access token from Pushwoosh Control Panel
      "source": null, // optional. Possible values are null, "CP", "API","GeoZone", "Beacon", "RSS", "AutoPush","Twitter", "A/B Test"
      "searchBy": "applicationCode",  // optional. Possible values are "", "notificationID", "notificationCode", "applicationCode", "campaignCode"
      "value": "C8717-703F2", // optional
      "lastNotificationID": 0 // optional
    }
  }
*/
$.fn.showMessage = function(message, type){

  let className = 'bg-success';

  switch (type) {
    case 'success':
      className = 'bg-success';
      break;

    case 'error':
      className = 'bg-danger';
      break;
  }

  $('.toast-body').removeClass( "bg-success bg-danger" )
  $('.toast-body').text(message).addClass(className);
  
  $('#mensaje').toast('show')

  $('#myToast').on('hidden.bs.toast', function () 
  {
    $('.toast-body').text(' ').removeClass(className);
  })

}


/************ VALIDACION  *****************/

$.fn.validate = function()
{
   if( ! $('#slt-apps').val() )
   {
       $.fn.showMessage('Seleccione Aplicacion', 'error')
       return false
   }

   if( $('.chk_plataform:checked').length < 1 )
   {
       $.fn.showMessage('Seleccione Plataforma', 'error')
       return false
   }

   if( ! $('#txa_msj_push').val() )
   {
       $.fn.showMessage('Indique Mensaje', 'error')
       return false
   }

   if( $('#txa_msj_push').val().length > 160 )
   {
       $.fn.showMessage('Mensaje tiene mas de 160 caracteres', 'error')
       return false
   }

   if( $('#schedule-date').val() || $('#schedule-time').val() )
   {
       
        if(! $('#schedule-date').val())
        {
            $.fn.showMessage('Indique Fecha', 'error')
            return false
        }

        if(! $('#schedule-time').val())
        {
            $.fn.showMessage('Indique Hora', 'error')
            return false
        }
    
    
   }

   return true
}



















