<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Chat;

class ChatController extends Controller
{
    //
    public function shoeTimelinePage()
    {
        return view('timeline');
    }

    public function postChat(Request $request)
    {
        $validator = $request->validate([
            'chat' => ['required', 'string', 'max:280'],
        ]);
        
        Chat::create([
            'user_id' => 1,
            'chat' => $request->chat,
        ]);

        return back();
    }
}
