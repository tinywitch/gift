<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request, $code = null)
    {
        if(is_null($code)) {
            $content = 'sPhoton brings the Boys out!';
        }
        else {
            $message = Message::where('code', $code)->first();

            if(is_null($message)){
                $content = "Hong được đâu bé ơiiiii";
            }
            else {
                $content = $message->message;
            }
        }

        return view('welcome', compact('content'));
    }
}
