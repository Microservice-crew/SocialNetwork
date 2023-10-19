<?php

namespace App\Http\Controllers;

use App\Models\CommentsEvent;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

        // Fetch comments for the associated event
        $event = Event::find($data['event_id']);
        $comments = $event->comments;

        // Redirect back to the event and pass the comments
        return redirect()->route('events.detail', ['event' => $request->event_id])
            ->with('success', 'Comment added successfully')
            ->with('comments', $comments);
    }


    public function update(Request $request, $id)
    {
        // Validate the request
        $data = $request->validate([
            'content' => 'required|string',
        ]);

        // Find the comment by ID
        $comment = CommentsEvent::findOrFail($id);

        // Check if the user is authorized to edit the comment (you may add additional authorization logic)
        if ($comment->user_id !== Auth::user()->id) {
            return redirect()->back()->with('error', 'You are not authorized to edit this comment.');
        }

        // Update the comment content
        $comment->update([
            'content' => $data['content'],
        ]);

        return redirect()->back()->with('success', 'Comment updated successfully');
    }

    public function destroy($id)
    {
        // Find the comment by ID
        $comment = CommentsEvent::findOrFail($id);

        // Check if the user is authorized to delete the comment (you may add additional authorization logic)
        if ($comment->user_id !== Auth::user()->id) {
            return redirect()->back()->with('error', 'You are not authorized to delete this comment.');
        }

        // Delete the comment
        $comment->delete();

        return redirect()->back()->with('success', 'Comment deleted successfully');
    }

}
