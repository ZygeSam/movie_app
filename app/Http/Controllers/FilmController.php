<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use GuzzleHttp\Client;

class FilmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $curl =  curl_init();
        curl_setopt($curl, CURLOPT_URL, 'http://127.0.0.1:8000/api/posts');
        curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
        $response = curl_exec($curl);
        $data = json_decode($response,true);

        //$response = Http::get('https://api.themoviedb.org/3/trending/movie/day?api_key=f295cf82a3417a3bd170d07c8a3d35e0');
        //  $response = Http::get('https://api.themoviedb.org/3/movie/3?api_key=f295cf82a3417a3bd170d07c8a3d35e0');
        // $response = Http::get('http://127.0.0.1:8000/api/posts');
        // return json_decode($response->body());

        // $client = new Client();
        // $url = 'https://api.themoviedb.org/3/trending/movie/day?api_key=f295cf82a3417a3bd170d07c8a3d35e0';
        // $responseBody = $client->request('GET', $url, [
        //     'verify' => false,
        // ]);
        // return $response =json_decode($responseBody->getBody()) ;
    }

    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $http = Http::post('http://127.0.0.1:8000/api/posts', [
        //     'page_id' => '3',
        //     'title'=> 'Total Bondage',
        //     'content' => 'The Bond of the slavemen',
        // ]);

        // $client = new Client();
        // $url = 'https://api.themoviedb.org/3/movie/3/rating?api_key=f295cf82a3417a3bd170d07c8a3d35e0';
        // $postBody = $client->request('POST', $url, [
        //     'value' => 8.5
        // ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
