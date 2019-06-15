<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
require_once('../../');

class SchedulerController extends Controller
{
    public function __construct()
    {
        // initialize slack connection
        $token = getenv('SLACK_TOKEN');
        $client = new SlackRealTimeClient($loop);
        $client->setToken($token);
        $client->connect();

        $loop = ReactEventLoopFactory::create();

        $loop->run();
    }
}

