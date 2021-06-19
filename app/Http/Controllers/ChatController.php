<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChatController extends Controller
{
    //
    public function shoeTimelinePage()
    {
        return view('timeline');
    }
}
