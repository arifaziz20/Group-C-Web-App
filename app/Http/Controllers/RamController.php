<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ram;

class RamController extends Controller
{
    public function index()
    {
        $rams = ram::all();
        return view ('admindashboard.ram.index', compact('rams'));
    }

    public function create()
    {
        return view('admindashboard.ram.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'speed'=>'required',
            'module'=>'required',
            'price'=>'required'
        ]);
        $ram = new ram([
            'name' =>  $request->get('name'),
            'speed' => $request->get('speed'),
            'module' => $request->get('module'),
            'price' => $request->get('price')
        ]);
        $ram->save();
        return redirect('RAM-record')->with('success', 'RAM Saved!');
    }

    public function edit($id)
    {
        $ram = ram::find($id);
        return view('admindashboard.ram.edit', compact('ram'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name'=>'required',
            'speed'=>'required',
            'module'=>'required',
            'price'=>'required'
        ]);
        $ram = ram::find($id);
        $ram->name =  $request->get('name');
        $ram->speed = $request->get('speed');
        $ram->module = $request->get('module');
        $ram->price = $request->get('price');
        $ram->save();
        return redirect('RAM-record')->with('success', 'RAM Updated!');
    }

    public function destroy($id)
    {
        $ram = ram::find($id);
        $ram->delete();
        return redirect('RAM-record')->with('success', 'RAM Deleted!');
    }
}
