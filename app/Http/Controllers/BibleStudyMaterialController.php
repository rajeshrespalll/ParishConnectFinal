<?php

namespace App\Http\Controllers;

use Redirect;
use App\Models\BibleStudyMaterial;
use Illuminate\Http\Request;

class BibleStudyMaterialController extends Controller
{
    public function index()
    {
        $bibleStudyMaterials = BibleStudyMaterial::all();
        return view('pages.resources', compact('bibleStudyMaterials'));
    }
}
