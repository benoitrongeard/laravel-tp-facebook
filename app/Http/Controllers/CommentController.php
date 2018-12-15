<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CommentController extends Controller
{
    protected $rules = [
        'content' => ['required'],
    ];

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request, $message_id)
    {
        $validator = Validator::make($request->all(), $this->rules);

        if ($validator->fails()) {
            $errors = $validator->errors()->all();

            return redirect()->back()->withErrors($errors);
        }

        $message = Message::findOrFail($message_id);

        $message->comments()->create([
            'user_id' => auth()->user()->id,
            'content' => $request->get('content')
        ]);

        return redirect()->back();
    }

    public function like($message_id, $comment_id)
    {
        $comment = Comment::findOrFail($comment_id);
        $comment->likeOrDislike();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comment = Comment::findOrFail($id);
        $comment->destroy();

        return redirect()->back();
    }
}
