<?php

namespace App\Http\Controllers;

use App\Models\MassSchedule;

class MassSchedulesController extends Controller
{
    public function index()
{
    $massSchedules = MassSchedule::all();/*
    dd($massSchedules); */
    return view('pages.massSchedule', compact('massSchedules'));
}

}
