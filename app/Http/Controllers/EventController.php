<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function create()
    {
        return view('createEvent');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'date' => 'required|date',
            'location' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'published_by' => 'required|exists:users,id', // Validate the existence of the user
        ]);

        // Handle file upload
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
            $data['image'] = 'images/' . $imageName;
        }

        Event::create($data);

        return redirect()->route('events') // Corrected route name
        ->with('success', 'Event created successfully');
    }

    public function edit(Event $event)
    {
        return view('events.edit', compact('event'));
    }

    public function update(Request $request, Event $event)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'date' => 'required|date',
            'location' => 'required|string',
            'published_by' => 'required|exists:users,id',
        ]);

        $event->update($data);

        return redirect()->route('events.index')
            ->with('success', 'Event updated successfully');
    }

    public function index()
    {
        $events = Event::all();

        return view('events', compact('events'));
    }
    //show
    public function show(Event $event)
    {
        return view('events.show', compact('event'));
    }

    public function destroy(Event $event)
    {
        $event->delete();

        return redirect()->route('events.index')
            ->with('success', 'Event deleted successfully');
    }

}
