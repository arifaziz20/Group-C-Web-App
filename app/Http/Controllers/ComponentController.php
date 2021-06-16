<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComponentController extends Controller
{
    public function cpu()
    {
        return view('pccomponents.cpu');
    }

    public function gpu()
    {
        return view('pccomponents.gpu');
    }

    public function motherboard()
    {
        return view('pccomponents.motherboard');
    }

    public function psu()
    {
        return view('pccomponents.psu');
    }

    public function ram()
    {
        return view('pccomponents.ram');
    }

    public function storage()
    {
        return view('pccomponents.storage');
    }
}
