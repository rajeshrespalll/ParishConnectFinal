<?php

namespace App\Http\Controllers;

use Redirect;
use App\Models\LiturgicalActivity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LiturgicalActivitiesController extends Controller
{
    public function create()
    {
        $activePage = 'liturgicalActivitiesScheduling'; // Set the active page
        return view('pages.liturgicalActivitiesScheduling', compact('activePage'));
    }public function store(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'ActivityType' => 'required',
            'ActivityName' => 'required',
            'ActivityHost' => 'required',
            'ActivityDescription' => 'required',
            'ActivityDateTime' => 'required|date',
        ]);

        $user_id = Auth::id();

        $liturgicalActivity = new LiturgicalActivity();
        $liturgicalActivity->user_id = $user_id;
        $liturgicalActivity->ActivityType = $validatedData['ActivityType'];
        $liturgicalActivity->ActivityName = $validatedData['ActivityName'];
        $liturgicalActivity->ActivityHost = $validatedData['ActivityHost'];
        $liturgicalActivity->ActivityDescription = $validatedData['ActivityDescription'];
        $liturgicalActivity->ActivityDateTime = $validatedData['ActivityDateTime'];
        $liturgicalActivity->save();

        return Redirect::route('liturgicalActivitiesScheduling');
    }

}
