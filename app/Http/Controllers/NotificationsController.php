<?php namespace App\Http\Controllers;

use App\Notifications;
use Illuminate\Http\Request;
use Ixudra\Curl\Facades\Curl;
use Ramsey\Uuid\Uuid;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use Gomoob\Pushwoosh\Client\Pushwoosh;

class NotificationsController extends Controller {

     private $auth;
     private $baseUrl;
     private $endPoint;
     private $aplicaction;
     private $plataform;
     private $options;
     private $schedule;
     private $schedule_date;
     private $schedule_time;
     private $message;
     

     function __construct() {
          
          $this->auth = 'J0F1HLWUZjJgkLvzTsduCq6cgv0b5I50Ws0d6q6X29YuyPvmKL8UiDwC0jm4MWCCjgv1FzXKAJIaZOZjXjdm';
          $this->baseUrl  = 'https://cp.pushwoosh.com/json/1.3/';
          $this->endPoint = 'createMessage';

     }



     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index()
     {
          
         

     }

     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function create()
     {
          $validate = request()->validate([
               'application'     => 'required|string|max:255',
               'plataform'       => 'required|integer',
               'options'         => 'required|array',
               'message'         => 'required|min:3|max:160',
               'schedule'        => 'required|boolean',
               'date'            => 'required_with:schedule|date',
               'time'            => 'required_with:schedule',
          ]);
         
          $client = new Client(['base_uri' => $this->base_url ]);

          print_r(  $client);
 
     }     

     // obtener numero unico del mensaje para evitar reenvio
     public function getUUID()
     {
          return Uuid::uuid1();
     }


     public function sendRequest(Array $data, String $endPointUrl)
     {
          $response = Curl::to($this->base_url . $endPointUrl)
          ->withData( ['request' => $data ] )
          ->withContentType('application/json')
          ->withResponseHeaders()
          ->asJsonRequest()
          ->enableDebug('/home/ingenio2/logFile.txt') //apontar al storage
          ->post();

          return $response;
     }
     


     public function setNotifications(Array $options)
     {
          # code...
     }
     
     /*
     
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
     
     
     
     
     
     
     
     
     $response = $client->post("http://myapp.com/user", [
    // un array con la data de los headers como tipo de peticion, etc.
    'headers' => ['foo' => 'bar'],
    // array de datos del formulario
    'body' => [
        'name' => 'jeff',
        'emai' => 'foo@bar.com',
        'pass' => 'secret'
    ]
]);
     $client = new \GuzzleHttp\Client();
    $url = "http://myexample.com/api/posts";
    $myBody['name'] = "Demo";
    $request = $client->post($url,  ['body'=>$myBody]);
    $response = $request->send();

    dd($response);
     
     
     
   
 */ 
     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
     public function store(Request $request)
     {
          $data  =  [    'auth'         => $this->auth, 
                         'application'  => $this->aplicaction
                    ];

          $endPoint = 'getApplication';

          return ['response' => $this->sendRequest($data, $endPoint)];
     }

     /**
     * Display the specified resource.
     *
     * @param  \App\Notifications  $notifications
     * @return \Illuminate\Http\Response
     */
     public function show(Notifications $notifications)
     {
          //
     }

     /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Notifications  $notifications
     * @return \Illuminate\Http\Response
     */
     public function edit(Notifications $notifications)
     {
          //
     }

     /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Notifications  $notifications
     * @return \Illuminate\Http\Response
          */
     public function update(Request $request, Notifications $notifications)
     {
         
     }

     /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Notifications  $notifications
     * @return \Illuminate\Http\Response
     */
     public function destroy(Notifications $notifications)
     {
          //
     }
}
