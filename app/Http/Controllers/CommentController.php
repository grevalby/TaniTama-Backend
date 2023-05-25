<?php

namespace App\Http\Controllers;

use App\Http\Resources\CommentResource;
use App\Http\Resources\UpdatedCommentResource;
use App\Models\Comment;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request, $id)
    {
        $validated = $request->validate([
            'content' => 'required',
        ]);

        //mengambil post_id dari parameter dan user_id yang sedang login
        $request['post_id'] = Post::findOrFail($id)->id;
        $request['user_id'] = Auth::user()->id;
        
        $comment = Comment::create($request->all());

        return new CommentResource($comment->loadMissing(['commentator:id,name,photo']));
        
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'content' => 'required',
        ]); 

        $comment = Comment::findOrFail($id);
        $comment->update($request->all());
        return new UpdatedCommentResource($comment->loadMissing('commentator:id,name'));
    }

    public function destroy($id)
    {
        $comment = Comment::findOrFail($id);
        
        $comment->delete();
        return response()->json(['message' => 'Comment Deleted'], 204);

    }
}
