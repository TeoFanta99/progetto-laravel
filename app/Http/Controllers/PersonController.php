<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Person;
use App\Models\Event;

class PersonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $people = Person::orderBy('firstname', 'asc')->get();
        $noEvent = $people->contains('event_id', 0);

        return view('pages.manage_people', compact('people', 'noEvent'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $people = Person :: all();
        $events = Event :: all();
        return view('pages.create_person', compact('people', 'events'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request -> all();

        $person = new Person();
        $person->firstname = $data['firstname'];
        $person->lastname = $data['lastname'];
        $person->event_id = $data['event_id'];

        $person -> save();

        return redirect() -> route('index.people');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $person = Person :: find($id);
        $events = Event :: all();

        return view ('pages.show_person', compact('person', 'events'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $person = Person :: find($id);

        $data = $request->all();

        $person->firstname = $data['firstname'];
        $person->lastname = $data['lastname'];
        $person->event_id = $data['event_id'];

        $person->save();

        return redirect()->route('index.people');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
