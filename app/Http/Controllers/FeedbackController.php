<?php

namespace App\Http\Controllers;

use Redirect;
use App\Models\Feedback;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;


class FeedbackController extends Controller
{

public function create()
{
    return view('pages.feedback');
}
public function store(Request $request)
{
    $validator = Validator::make($request->all(), [
        'satisfaction' => 'required|in:Very Dissatisfied,Dissatisfied,Neutral,Satisfied,Very Satisfied',
        'Recommendation' => 'required|integer|min:0|max:10',
        'Opinion' => 'required|string',
    ]);

    // Check if the validation fails
    if ($validator->fails()) {
        return redirect()->back()->withErrors($validator)->withInput();
    }

    // If validation passes, proceed with storing the feedback
    $user_id = Auth::id(); // Get the authenticated user's ID

    $feedback = new Feedback();
    $feedback->user_id = $user_id; // Assign the user's ID to the user_id field
    $feedback->Satisfaction = $request->satisfaction;
    $feedback->Recommendation = $request->Recommendation;
    $feedback->Opinion = $request->Opinion;
    $feedback->save();

    return Redirect::route('feedback');
}

}
