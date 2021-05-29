<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChatController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function chat()
    {
        return view('chat');
    }
    public function send(request $request)
    {
        $user = Auth::user()->id;
        event (new ChatEvent($message, $user));
    }
}
