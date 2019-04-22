<?php namespace App\Http\Controllers;

use App\Notifications;
use Illuminate\Http\Request;
use Ixudra\Curl\Facades\Curl;

class NotificationsController extends Controller {

     private $auth;
     private $aplicaction;
     private $notifications;
     private $base_url;

     function __construct() {
          
          $this->auth = 'J0F1HLWUZjJgkLvzTsduCq6cgv0b5I50Ws0d6q6X29YuyPvmKL8UiDwC0jm4MWCCjgv1FzXKAJIaZOZjXjdm';
          $this->aplicaction = 'FFC4B-76250';
          $this->base_url  = 'https://cp.pushwoosh.com/json/1.3/';

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
