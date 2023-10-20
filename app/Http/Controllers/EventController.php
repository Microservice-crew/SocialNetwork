<?php

namespace App\Http\Controllers;


use App\Models\CommentsEvent;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class EventController extends Controller
{
    public function index()
    {

        $events = Event::all();



        return View::make('Events.events', compact('events'));
    }

    public function admin()
    {
        $events = Event::all();


        return View::make('Admin.Event.Events', compact('events'));
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
            'description'=>'required|string',
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
            'description'=>'required|string',
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


    public function getEvents()
    {
        $events = Event::all(); // Récupérez les événements depuis votre modèle Event

        // Transformez les événements dans un format compatible avec FullCalendar
        $formattedEvents = [];

        foreach ($events as $event) {
            $formattedEvents[] = [
                'title' => $event->name,
                'start' => $event->date,
                'url' => route('events.detail', $event->id),
            ];
        }

        return response()->json($formattedEvents);
    }
    public function calendar()
    {
        $events = Event::all(); // Suppose que vous avez un modèle Event


        return view('Events\Calender', compact('events'));

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

    public function eventDetail($event)
    {
        // Fetch the event details and comments here and pass them to the view
        $event = Event::find($event);
        $comments = CommentsEvent::where('event_id', $event->id)->get();

        return view('Events/eventDetail', compact('event', 'comments'));
    }


}
