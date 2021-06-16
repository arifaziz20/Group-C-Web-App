<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\preset;

class PresetsController extends Controller
{
    public function index()
    {
        $presets = preset::all();
        return view ('pcpopularpreset', compact ('presets'));
    }
}
