<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\storage;

class StorageController extends Controller
{
    public function index()
    {
        $storages = storage::all();
        return view ('admindashboard.storage.index',compact('storages'));
    }

    public function create()
    {
        return view('admindashboard.storage.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'capacity'=>'required',
            'form_factor'=>'required',
            'type'=>'required',
            'price'=>'required'
        ]);
        $storage = new storage([
            'name' =>  $request->get('name'),
            'capacity' => $request->get('capacity'),
            'form_factor' => $request->get('form_factor'),
            'type' => $request->get('type'),
            'price' => $request->get('price')
        ]);
        $storage->save();
        return redirect('Storage-record')->with('success', 'Storage Saved!');
    }

    public function edit($id)
    {
        $storage = storage::find($id);
        return view('admindashboard.storage.edit', compact('storage'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name'=>'required',
            'capacity'=>'required',
            'form_factor'=>'required',
            'type'=>'required',
            'price'=>'required'
        ]);
        $storage = storage::find($id);
        $storage->name =  $request->get('name');
        $storage->capacity = $request->get('capacity');
        $storage->form_factor = $request->get('form_factor');
        $storage->type = $request->get('type');
        $storage->price = $request->get('price');
        $storage->save();
        return redirect('Storage-record')->with('success', 'Storage Updated!');
    }

    public function destroy($id)
    {
        $storage = storage::find($id);
        $storage->delete();
        return redirect('Storage-record')->with('success', 'Storage Deleted!');
    }
}
