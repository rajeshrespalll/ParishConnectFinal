<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Application;
use Redirect;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;


class ApplicationController extends Controller
{
    public function create()
    {
        $activePage = 'application'; // Set the active page
        return view('pages.application', compact('activePage'));
    }
    public function store(Request $request)
{
    // Validate the request data
    $validator = Validator::make($request->all(), [
        'ApplicationType' => 'required',
        'Sex' => 'required',
        'Age' => 'required|numeric',
        'ContactNumber' => 'required|numeric',
    ]);

    // Check if the validation fails
    if ($validator->fails()) {
        return redirect()->back()->withErrors($validator)->withInput();
    }

    // If validation passes, proceed with storing the application
    $user_id = Auth::id(); // Get the authenticated user's ID

    $application = new Application();
    $application->user_id = $user_id; // Assign the user's ID to the user_id field
    $application->ApplicationType = $request->ApplicationType;
    $application->Sex = $request->Sex;
    $application->Age = $request->Age;
    $application->ContactNumber = $request->ContactNumber;
    $application->save();

    return Redirect::route('application');
}
}
