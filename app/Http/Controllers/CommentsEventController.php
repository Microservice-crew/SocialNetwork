<?php

namespace App\Http\Controllers;

use App\Models\CommentsEvent;
use Illuminate\Http\Request;

class CommentsEventController extends Controller
{
    public function store(Request $request)
    {
        // Validate the request
        $data = $request->validate([
            'event_id' => 'required|exists:events,id',
            'user_id' => 'required|exists:users,id',
            'content' => 'required|string',
        ]);

        // Create the comment
        CommentsEvent::create($data);



        // Redirect back to the event or a specific page
        return redirect()->route('events.show', ['event' => $request->event_id])
            ->with('success', 'Comment added successfully');
    }

    public function destroy($id)
    {
        // Find the comment by ID and delete it
        $comment = CommentsEvent::findOrFail($id);
        $comment->delete();

        // Redirect back to the event or a specific page
        return redirect()->route('events.show', ['event' => $comment->event_id])
            ->with('success', 'Comment deleted successfully');
    }
}
