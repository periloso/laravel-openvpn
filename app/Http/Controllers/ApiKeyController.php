<?php

namespace App\Http\Controllers;

use App\Models\ApiKey;
use Illuminate\Http\Request;

class ApiKeyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $applications = ApiKey::with('application')->get()->makeHidden('application_id');
        return $applications;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $apiKey = ApiKey::create($request->all());
        return $apiKey;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ApiKey  $apiKey
     * @return \Illuminate\Http\Response
     */
    public function show(ApiKey $apiKey)
    {
        $apiKey = ApiKey::with('application')->find($apiKey->id)->makeHidden('application_id');
        return $apiKey;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ApiKey  $apiKey
     * @return \Illuminate\Http\Response
     */
    public function edit(ApiKey $apiKey)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ApiKey  $apiKey
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ApiKey $apiKey)
    {
        $apiKey->update($request->all());
        $apiKey = ApiKey::with('application')->find($apiKey->id)->makeHidden('application_id');
        return $apiKey;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ApiKey  $apiKey
     * @return \Illuminate\Http\Response
     */
    public function destroy(ApiKey $apiKey)
    {
        $apiKey->delete();
    }
}
