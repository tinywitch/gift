<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index(Request $request, $code)
    {
        $message = Message::where('code', $code)->firstOrFail();

        return view('welcome', compact('message'));
    }
}
