<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function store(Request $request)
    {
        $message = new Message($request->all());
        $message->user()->associate(Auth::user());
        $message->save();

        return redirect()->back();
    }


    public function like($id)
    {
        $message = Message::findOrFail($id);
        $message->likeOrDislike();
        return redirect()->back();
    }
}
