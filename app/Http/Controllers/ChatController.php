<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
// use App\Models\user;
use App\Events\ChatEvent;


class ChatController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function chat()
    {
        return view('chat');
        // return Auth::user();
    }

    // public function send(request $request)
    // {
    //     $user = Auth::user()->id;
    //     event (new ChatEvent($message, $user));
    // }

    public function send(request $request)
    {
        $message = "Hello";
        $user = Auth::user();
        event (new ChatEvent($message, $user));
    }
}
