<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $client = new \GuzzleHttp\Client();
        // $request = $client->get('http://localhost:8080/api/index');
        // $response = $request->getBody()->getContents();
        // echo '<pre>';
        // print_r($response);
        // exit;

        $client = new \GuzzleHttp\Client();
        $api_response = $client->get('http://localhost:8000/api');
        $objResponse = $api_response->getBody()->getContents();
        //echo '<pre>';
        $response = json_decode($objResponse);
        return view('tasks.index',compact('response'));
        //print_r($response);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tasks.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $client = new \GuzzleHttp\Client();
        $api_response = $client->request('POST', 'http://localhost:8000/api/store', 
            ['form_params' => [
                    'title' => $request->title,
                    'description' => $request->description
        ]]);
        $objResponse = $api_response->getBody()->getContents();
        $response = json_decode($objResponse);
        return redirect('index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        $client = new \GuzzleHttp\Client();
        $api_response = $client->delete('http://localhost:8000/api/delete', 
            [
            'id' => $id,
        ]);
        $objResponse = $api_response->getBody()->getContents();
        $response = json_decode($objResponse);
        return redirect('index');
    }
}
