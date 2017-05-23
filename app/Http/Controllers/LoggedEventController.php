<?php

namespace App\Http\Controllers;

use App\Models\LoggedEvent;
use Illuminate\Http\Request;

class LoggedEventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return LoggedEvent::with('application')->get()->makeHidden('application_id');
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
        $loggedEvent = LoggedEvent::create($request->all());
        return $loggedEvent->makeHidden('application_id');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\LoggedEvent  $loggedEvent
     * @return \Illuminate\Http\Response
     */
    public function show(LoggedEvent $loggedEvent)
    {
        $loggedEvent = LoggedEvent::with('application')->find($loggedEvent->id)->makeHidden('application_id');
        return $loggedEvent;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LoggedEvent  $loggedEvent
     * @return \Illuminate\Http\Response
     */
    public function edit(LoggedEvent $loggedEvent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\LoggedEvent  $loggedEvent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LoggedEvent $loggedEvent)
    {
        $loggedEvent->update($request->all());
        $loggedEvent = LoggedEvent::with('application')->find($loggedEvent->id)->makeHidden('application_id');
        return $loggedEvent;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LoggedEvent  $loggedEvent
     * @return \Illuminate\Http\Response
     */
    public function destroy(LoggedEvent $loggedEvent)
    {
        $loggedEvent->delete();
    }
}
