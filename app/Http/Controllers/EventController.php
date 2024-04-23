<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\Person;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $events = Event :: all();
        
        return view('pages.manage_events', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $people = Person :: all();
        $events = Event :: all();
        return view('pages.create_event', compact('people', 'events'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request -> all();

        $event = new Event();
        $event->name = $data['name'];
        $event->date = $data['date'];

        $event -> save();

        return redirect() -> route('index.events');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $event = Event :: find($id);
        $people = Person :: where('event_id', $id)->get();

        return view('pages.show_event', compact('event', 'people'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $event = Event :: find($id);
        $people = Person :: where('event_id', $id)->get();

        return view ('pages.edit_event', compact('event', 'people'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $event = Event :: find($id);

        $data = $request->all();

        $event->name = $data['name'];
        $event->date = $data['date'];

        $event->save();

        return redirect()->route('index.events');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }


    public function detachPerson(Event $event, Person $person)
    {
        $person->event_id = null;
        $person->save();

        return back()->with('success', 'Persona rimossa dall\'evento.');
    }
}
