<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class KeyWordController extends Controller
{
    public function index()
    {
        // return view('search');
    }
    


  public function search(Request $request) 
  {
        $word = $request->input('search');
        if( $word == "" ){
            $word = 'ai';
        }

	    $client = new Client();
        $res = $client->request('GET', 'http://localhost:5000/test', [
            'query' => [
                'word' => $word
            ]
        ]);
        // echo $res->getStatusCode();
        // "200"
        // echo $res->getHeader('content-type');
        // 'application/json; charset=utf8'
        // echo $res->getBody();
        // {"type":"User"...'
        // $keywords = $res->getBody();
        $keywords = json_decode($res->getBody(), true);

        return view('test', compact('keywords'));


		// $request = \Illuminate\Http\Request::create('http://localhost:8000/api/keyword', 'GET', ['word' => 'ai']);

		// $request = Request::get('http://localhost:8000/api/keyword', 'GET', ['word' => 'ai']);
		// $json = json_decode($res->getBody()) ;
		// return $json ;

		// $response = \Illuminate\Http\Request::create( 'GET', 'http://localhost:8000/api/keyword', [ 'word' => 'ai']);
		/// return $request ;


    }
}
