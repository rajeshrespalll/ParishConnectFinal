<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventsController extends Controller
{
    public function index()
    {
        // Fetch all events from the database
        $events = Event::all();

        // Pass the events to the view
        return view('home', compact('events'));
    }
}

