<?php

namespace App\Http\Controllers;

use App\Models\LoggedEvent;
use App\Models\ApiKey;
use Illuminate\Http\Request;

class LoggingController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $application = ApiKey::where('key', $request->get('apiKey'))->with('application')->firstOrFail()->application;
        $loggedEvent = LoggedEvent::create([
            'application' => $application,
            'release_stage' => $request->get('events')[0]->app->releaseStage,
            'device' => $request->get('events')[0]->device,
            'user' => $request->get('events')[0]->user,
            'context' => $request->get('events')[0]->context,
            'severity' => $request->get('events')[0]->severity,
            'exceptions' => $request->get('events')[0]->exceptions,
        ]);

        return $loggedEvent;
    }
}
