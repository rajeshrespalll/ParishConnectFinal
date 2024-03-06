<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Event;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // Fetch all events from the database
        $events = Event::all();

        // Pass the events to the view
        return view('home')->with('events', $events);
        // or
        // return view('home', compact('events'));
    }

}
