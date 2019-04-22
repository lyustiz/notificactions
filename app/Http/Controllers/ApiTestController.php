<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Ixudra\Curl\Facades\Curl;

class ApiTestController extends Controller
{
     public function test()
     {
          $response = Curl::to('https://restcountries.eu/rest/v2/all')
                      ->get();
          /*
          $response = Curl::to('http://www.foo.com/bar')
          ->withData( array( 'foz' => 'baz' ) )
          ->asJson()
          ->get();
          
          $response = Curl::to('http://www.foo.com/bar')
          ->withData( array( 'foz' => 'baz' ) )
          ->asJson()
          ->post();

          ->withHeaders( array( 'MyFirstHeader: 123', 'MySecondHeader: 456' ) )
          ->withContentType('application/json')
          ->withProxy('192.168.1.1', 80, 'http://', 'Foo', 'Bar')
          ->withFile( 'image_2', '/path/to/dir/image2.png', 'image/png', 'imageName2.png' )
          ->withContentType('image/png')
          ->download('/path/to/dir/image.png')
          ->returnResponseObject()
        */
          dd($response);
     }
}
