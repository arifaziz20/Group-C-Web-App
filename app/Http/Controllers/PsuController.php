<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\psu;

class PsuController extends Controller
{
    public function index()
    {
        $psus = psu::all();
        return view ('admindashboard.psu.index', compact('psus'));
    }

    public function show()
    {
        return view('pccomponents.psu');
    }

    public function create()
    {
        return view('admindashboard.psu.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'efficiency_rating'=>'required',
            'form_factor'=>'required',
            'modular'=>'required',
            'wattage'=>'required',
            'price'=>'required'
        ]);
        $psu = new psu([
            'name' =>  $request->get('name'),
            'efficiency_rating' => $request->get('efficiency_rating'),
            'form_factor' => $request->get('form_factor'),
            'modular' => $request->get('modular'),
            'wattage' => $request->get('wattage'),
            'price' => $request->get('price')
        ]);
        $psu->save();
        return redirect('PSU-record')->with('success', 'PSU Saved!');
    }

    public function edit($id)
    {
        $psu = psu::find($id);
        return view('admindashboard.psu.edit', compact('psu'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name'=>'required',
            'efficiency_rating'=>'required',
            'form_factor'=>'required',
            'modular'=>'required',
            'wattage'=>'required',
            'price'=>'required'
        ]);
        $psu = psu::find($id);
        $psu->name =  $request->get('name');
        $psu->efficiency_rating = $request->get('efficiency_rating');
        $psu->form_factor = $request->get('form_factor');
        $psu->modular = $request->get('modular');
        $psu->wattage = $request->get('wattage');
        $psu->price = $request->get('price');
        $psu->save();
        return redirect('PSU-record')->with('success', 'PSU Updated!');
    }

    public function destroy($id)
    {
        $psu = psu::find($id);
        $psu->delete();
        return redirect('PSU-record')->with('success', 'PSU Deleted!');
    }
}
