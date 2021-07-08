<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Chat;

class ChatController extends Controller
{
    //
    public function shoeTimelinePage()
    {
        $chats = Chat::latest()->get();
        return view('timeline', ['chats' => $chats]);
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

    public function destroy($id)
    {
        $chat = Chat::find($id);
        $chat->delete();

        return redirect()->route('timeline');
    }
}
