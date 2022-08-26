<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class NodeController extends Controller
{
    //Function to create User
    public function createUser()

    {

        $apiURL = 'https://sharp-weeks-hear-59-164-67-218.loca.lt/user/create';

        $postInput = [
            'userKey' => '8087742697',


        ];




        $token="eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJzZXJ2ZXJJZCI6IjNiMTI3YjZmLTI0ZDMtNDQyNC04NmVlLTQwODUzMTcxYjY0YiIsImFwaUtleSI6IjZiMGI5OWZiLTI0ZTQtNGQyZS05ZjM0LTYyZjE5MzQzMGRhZSIsImlhdCI6MTY1ODEwNDQ3N30.Nhsk-kB1tMbGyb_JlWDPlmAgGXDxglUGQThRgVpep5c";


        $response = Http::withToken($token)->post($apiURL, $postInput);



        $statusCode = $response->status();

        $responseBody = json_decode($response->getBody(), true);



        dd($responseBody);

    }

    //function to get UserToken
    public function getUserToken()
    {
        $apiURL = 'https://sharp-weeks-hear-59-164-67-218.loca.lt/user/token/8087742697';

        $token="eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJzZXJ2ZXJJZCI6IjNiMTI3YjZmLTI0ZDMtNDQyNC04NmVlLTQwODUzMTcxYjY0YiIsImFwaUtleSI6IjZiMGI5OWZiLTI0ZTQtNGQyZS05ZjM0LTYyZjE5MzQzMGRhZSIsImlhdCI6MTY1ODEwNDQ3N30.Nhsk-kB1tMbGyb_JlWDPlmAgGXDxglUGQThRgVpep5c";
        $response =Http::withToken($token)->get($apiURL);
        $statusCode = $response->status();
        $responseBody = json_decode($response->getBody(), true);

        dd($responseBody);
    }


//Function to create User
    public function createOrganization()

    {

        $apiURL = 'https://young-turtles-tease-59-164-67-218.loca.lt/organization/create';

        $postInput = [
            'name' => 'NDRF',
            'description' => 'Organization parent',
            'userToken' => 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1c2VyS2V5IjoiODA4Nzc0MjY5NyIsImFkZHJlc3MiOiIweDVEYkM5QjhEREFmZWU2NjlDRTMxNGEwNTRkN0U3Q2I3MTRhMDg1M2QiLCJzZWNyZXQiOiJVMkZzZEdWa1gxK01Qa1BBc0hlbEpBYlZxQS8zeDZoa1JaZDMxSE9aY0JaVjZyVVYxdXhycHRLVHF5R291NkZuZ0pJeXdGcVpJSEc2SU0vYmpTV1B2YmRLZkdpNjdOT01mOW1zRTF2WHhYdFY0eTVtTUVKaEo5ekxaUlZoc2FJdiIsImlhdCI6MTY2MTQxOTQxMH0.x3QCzzsAk5aHekJDDzqZ0qACVzVOfhq2S0Mhb6PGY84',
            'signature' =>'huduwhduwdhud',

        ];




        $token="eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJzZXJ2ZXJJZCI6IjNiMTI3YjZmLTI0ZDMtNDQyNC04NmVlLTQwODUzMTcxYjY0YiIsImFwaUtleSI6IjZiMGI5OWZiLTI0ZTQtNGQyZS05ZjM0LTYyZjE5MzQzMGRhZSIsImlhdCI6MTY1ODEwNDQ3N30.Nhsk-kB1tMbGyb_JlWDPlmAgGXDxglUGQThRgVpep5c";


        $response = Http::withToken($token)->post($apiURL, $postInput);



        $statusCode = $response->status();

        $responseBody = json_decode($response->getBody(), true);



        dd($responseBody);

    }

    //function to get All Organization
    public function getAllOrganization()
    {
        $apiURL = 'https://shy-turtles-stay-59-164-67-218.loca.lt/organization/all';

        $token="eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJzZXJ2ZXJJZCI6IjNiMTI3YjZmLTI0ZDMtNDQyNC04NmVlLTQwODUzMTcxYjY0YiIsImFwaUtleSI6IjZiMGI5OWZiLTI0ZTQtNGQyZS05ZjM0LTYyZjE5MzQzMGRhZSIsImlhdCI6MTY1ODEwNDQ3N30.Nhsk-kB1tMbGyb_JlWDPlmAgGXDxglUGQThRgVpep5c";
        $response =Http::withToken($token)->get($apiURL);
        $statusCode = $response->status();
        $responseBody = json_decode($response->getBody(), true);

        dd($responseBody);
    }




 //function to get signature belongs to organization or not
  public function checkValidOrganization()

  {
      $apiURL = 'https://eager-months-admire-59-164-67-218.loca.lt/organization/dwdwwdwdwdwdwd';

      $token="eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJzZXJ2ZXJJZCI6IjNiMTI3YjZmLTI0ZDMtNDQyNC04NmVlLTQwODUzMTcxYjY0YiIsImFwaUtleSI6IjZiMGI5OWZiLTI0ZTQtNGQyZS05ZjM0LTYyZjE5MzQzMGRhZSIsImlhdCI6MTY1ODEwNDQ3N30.Nhsk-kB1tMbGyb_JlWDPlmAgGXDxglUGQThRgVpep5c";
      $response =Http::withToken($token)->get($apiURL);
      $statusCode = $response->status();
      $responseBody = json_decode($response->getBody(), true);

      dd($responseBody);
  }



//Function to update signature
public function updateSignature()

{

    $apiURL = 'https://angry-teeth-build-59-164-67-218.loca.lt/organization/7709040699/update';

    $postInput = [

        'signature' =>'2680c776ed3304905906ac8644b417ea',

    ];




    $token="eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJzZXJ2ZXJJZCI6IjNiMTI3YjZmLTI0ZDMtNDQyNC04NmVlLTQwODUzMTcxYjY0YiIsImFwaUtleSI6IjZiMGI5OWZiLTI0ZTQtNGQyZS05ZjM0LTYyZjE5MzQzMGRhZSIsImlhdCI6MTY1ODEwNDQ3N30.Nhsk-kB1tMbGyb_JlWDPlmAgGXDxglUGQThRgVpep5c";


    $response = Http::withToken($token)->post($apiURL, $postInput);



    $statusCode = $response->status();

    $responseBody = json_decode($response->getBody(), true);



    dd($responseBody);

}


//Function to delete signature
public function deleteSignature()

{

    $apiURL = 'http://192.168.3.70:3000/organization/8101be61e609d61ffa8e0fa31ce7a24a/delete';

    $token="eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJzZXJ2ZXJJZCI6IjNiMTI3YjZmLTI0ZDMtNDQyNC04NmVlLTQwODUzMTcxYjY0YiIsImFwaUtleSI6IjZiMGI5OWZiLTI0ZTQtNGQyZS05ZjM0LTYyZjE5MzQzMGRhZSIsImlhdCI6MTY1ODEwNDQ3N30.Nhsk-kB1tMbGyb_JlWDPlmAgGXDxglUGQThRgVpep5c";


    $postInput = [

        'userToken' => 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1c2VyS2V5IjoiODA4Nzc0MjY5NyIsImFkZHJlc3MiOiIweDVEYkM5QjhEREFmZWU2NjlDRTMxNGEwNTRkN0U3Q2I3MTRhMDg1M2QiLCJzZWNyZXQiOiJVMkZzZEdWa1gxK01Qa1BBc0hlbEpBYlZxQS8zeDZoa1JaZDMxSE9aY0JaVjZyVVYxdXhycHRLVHF5R291NkZuZ0pJeXdGcVpJSEc2SU0vYmpTV1B2YmRLZkdpNjdOT01mOW1zRTF2WHhYdFY0eTVtTUVKaEo5ekxaUlZoc2FJdiIsImlhdCI6MTY2MTQxOTQxMH0.x3QCzzsAk5aHekJDDzqZ0qACVzVOfhq2S0Mhb6PGY84',

    ];

    $response = Http::withToken($token)->post($apiURL,$postInput);



    $statusCode = $response->status();

    $responseBody = json_decode($response->getBody(), true);



    dd($responseBody);

}


//Function to Add Users in organization
public function addUsers()

{

    $apiURL = 'http://192.168.3.70:3000/organization/8101be61e609d61ffa8e0fa31ce7a24a/addUsers';

    $token="eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJzZXJ2ZXJJZCI6IjNiMTI3YjZmLTI0ZDMtNDQyNC04NmVlLTQwODUzMTcxYjY0YiIsImFwaUtleSI6IjZiMGI5OWZiLTI0ZTQtNGQyZS05ZjM0LTYyZjE5MzQzMGRhZSIsImlhdCI6MTY1ODEwNDQ3N30.Nhsk-kB1tMbGyb_JlWDPlmAgGXDxglUGQThRgVpep5c";


    $postInput = [

        'users' => ['8087742697','denish'],
        'userToken' => 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1c2VyS2V5IjoiODA4Nzc0MjY5NyIsImFkZHJlc3MiOiIweDVEYkM5QjhEREFmZWU2NjlDRTMxNGEwNTRkN0U3Q2I3MTRhMDg1M2QiLCJzZWNyZXQiOiJVMkZzZEdWa1gxK01Qa1BBc0hlbEpBYlZxQS8zeDZoa1JaZDMxSE9aY0JaVjZyVVYxdXhycHRLVHF5R291NkZuZ0pJeXdGcVpJSEc2SU0vYmpTV1B2YmRLZkdpNjdOT01mOW1zRTF2WHhYdFY0eTVtTUVKaEo5ekxaUlZoc2FJdiIsImlhdCI6MTY2MTQxOTQxMH0.x3QCzzsAk5aHekJDDzqZ0qACVzVOfhq2S0Mhb6PGY84'

    ];

    $response = Http::withToken($token)->post($apiURL,$postInput);



    $statusCode = $response->status();

    $responseBody = json_decode($response->getBody(), true);



    dd($responseBody);

}


//Function to Add Users in organization
public function index()

{

    $apiURL = 'http://192.168.3.70:3000/organization/8101be61e609d61ffa8e0fa31ce7a24a/removeUsers';

    $token="eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJzZXJ2ZXJJZCI6IjNiMTI3YjZmLTI0ZDMtNDQyNC04NmVlLTQwODUzMTcxYjY0YiIsImFwaUtleSI6IjZiMGI5OWZiLTI0ZTQtNGQyZS05ZjM0LTYyZjE5MzQzMGRhZSIsImlhdCI6MTY1ODEwNDQ3N30.Nhsk-kB1tMbGyb_JlWDPlmAgGXDxglUGQThRgVpep5c";


    $postInput = [

        'users' => ['8087742697','denish'],
        'userToken' => 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1c2VyS2V5IjoiODA4Nzc0MjY5NyIsImFkZHJlc3MiOiIweDVEYkM5QjhEREFmZWU2NjlDRTMxNGEwNTRkN0U3Q2I3MTRhMDg1M2QiLCJzZWNyZXQiOiJVMkZzZEdWa1gxK01Qa1BBc0hlbEpBYlZxQS8zeDZoa1JaZDMxSE9aY0JaVjZyVVYxdXhycHRLVHF5R291NkZuZ0pJeXdGcVpJSEc2SU0vYmpTV1B2YmRLZkdpNjdOT01mOW1zRTF2WHhYdFY0eTVtTUVKaEo5ekxaUlZoc2FJdiIsImlhdCI6MTY2MTQxOTQxMH0.x3QCzzsAk5aHekJDDzqZ0qACVzVOfhq2S0Mhb6PGY84'

    ];

    $response = Http::withToken($token)->post($apiURL,$postInput);



    $statusCode = $response->status();

    $responseBody = json_decode($response->getBody(), true);



    dd($responseBody);

}



}



