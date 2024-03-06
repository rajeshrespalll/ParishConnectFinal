<?php

namespace App\Http\Controllers;

use Redirect;
use App\Models\Forum;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class ForumController extends Controller
{

public function create()
{
    return view('pages.forum');
}
public function store(Request $request)
{
    // Validate the request data
    $validator = Validator::make($request->all(), [
        'comment' => 'required|string',
    ]);

    // Check if the validation fails
    if ($validator->fails()) {
        return redirect()->back()->withErrors($validator)->withInput();
    }

    // If validation passes, proceed with storing the forum comment
    $user_id = Auth::id(); // Get the authenticated user's ID

    $forum = new Forum();
    $forum->user_id = $user_id; // Assign the user's ID to the user_id field
    $forum->comment = $request->comment;
    $forum->save();

    return Redirect::route('forum');
}
public function index()
    {
        $forums = Forum::select('forums.*', 'users.name as user_name')
                        ->join('users', 'forums.user_id', '=', 'users.id')
                        ->get();

        return view('pages.forum', compact('forums'));
    }
}
