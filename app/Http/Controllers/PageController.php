<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    public function newsFeed()
    {
        $user = Auth::user();
        $messages = Message::readableFor($user)->get();

        return view('pages.news-feed', ['messages' => $messages]);
    }
}
