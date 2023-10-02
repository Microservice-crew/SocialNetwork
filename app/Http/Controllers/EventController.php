<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::all(); // Change 10 to the number of events per page you prefer.


        return View::make('Events.events', compact('events'));
    }
    public function create()
    {
        return view('Events/createEvent');
    }

    public function storeEvent (Request $request)
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

        return redirect()->route('events')->with('success', 'Event created successfully');

    }

    public function edit($id)
    {
        $event = Event::findOrFail($id);
        return view('Events.editEvent', compact('event'));

    }

    public function update(Request $request, $id)
    {
        //update event
        $event = Event::findOrFail($id);
        $data = $request->validate([
            'name' => 'required|string',
            'date' => 'required|date',
            'location' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        // Handle file upload
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
            $data['image'] = 'images/' . $imageName;
        }

        $event->update($data);

        return redirect()->route('events.index')
            ->with('success', 'Event updated successfully');
    }



    //show
    public function show(Event $event)
    {
        return view('events.show', compact('event'));
    }

    public function deleteEvent(Event $event)
    {
        $event->delete();

        return redirect()->route('events.index')
            ->with('success', 'Event deleted successfully');
    }

}
