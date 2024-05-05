<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventsController extends Controller
{
    public function show($location, $name)
    {
        return view('events.show')
            ->with('location', $location)
            ->with('name', $name);
    }

    public function index()
    {
        $events = Event::all();
        return view('events.index')->with('events', $events);
    }

    public function showValidateForm()
    {
        return view('events.validate');
    }

    public function validateForm(Request $request)
    {
        $request->validate([
            'location' => 'required|alpha|min:3|max:50',
            'name' =>  'required|string|min:3|max:50'
        ]);

        return back()->with('success', 'Data valid');
    }
}
