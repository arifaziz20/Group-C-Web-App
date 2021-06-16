<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\motherboard;

class MotherboardController extends Controller
{
    public function index()
    {
        $motherboards = motherboard::all();
        return view ('admindashboard.motherboard.index', compact('motherboards'));
    }

    public function create()
    {
        return view('admindashboard.motherboard.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'form_factor'=>'required',
            'memory_max'=>'required',
            'memory_slot'=>'required',
            'memory_type'=>'required',
            'socket'=>'required',
            'price'=>'required'
        ]);
        $motherboard = new motherboard([
            'name' =>  $request->get('name'),
            'form_factor' => $request->get('form_factor'),
            'memory_max' => $request->get('memory_max'),
            'memory_slot' => $request->get('memory_slot'),
            'memory_type' => $request->get('memory_type'),
            'socket' => $request->get('socket'),
            'price' => $request->get('price')
        ]);
        $motherboard->save();
        return redirect('Motherboard-record')->with('success', 'Motherboard Saved!');
    }

    public function edit($id)
    {
        $motherboard = motherboard::find($id);
        return view('admindashboard.motherboard.edit', compact('motherboard'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name'=>'required',
            'form_factor'=>'required',
            'memory_max'=>'required',
            'memory_slot'=>'required',
            'memory_type'=>'required',
            'socket'=>'required',
            'price'=>'required'
        ]);
        $motherboard = motherboard::find($id);
        $motherboard->name =  $request->get('name');
        $motherboard->form_factor = $request->get('form_factor');
        $motherboard->memory_max = $request->get('memory_max');
        $motherboard->memory_slot = $request->get('memory_slot');
        $motherboard->memory_type = $request->get('memory_type');
        $motherboard->socket = $request->get('socket');
        $motherboard->price = $request->get('price');
        $motherboard->save();
        return redirect('Motherboard-record')->with('success', 'Motherboard Updated!');
    }

    public function destroy($id)
    {
        $motherboard = motherboard::find($id);
        $motherboard->delete();
        return redirect('Motherboard-record')->with('success', 'Motherboard Deleted!');
    }
}
