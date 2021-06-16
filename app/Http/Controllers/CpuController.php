<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\cpu;

class CpuController extends Controller
{
    public function index()
    {
        $cpus = cpu::all();
        return view ('admindashboard.cpu.index', compact ('cpus'));
    }

    public function create()
    {
        return view('admindashboard.cpu.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'model_name'=>'required',
            'manufacturer'=>'required',
            'price'=>'required'
        ]);
        $cpu = new cpu([
            'model_name' =>  $request->get('model_name'),
            'manufacturer' => $request->get('manufacturer'),
            'price' => $request->get('price')
        ]);
        $cpu->save();
        return redirect('CPU-record')->with('success', 'CPU Saved!');
    }

    public function edit($id)
    {
        $cpu = cpu::find($id);
        return view('admindashboard.cpu.edit', compact('cpu'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'model_name'=>'required',
            'manufacturer'=>'required',
            'price'=>'required'
        ]);
        $cpu = cpu::find($id);
        $cpu->model_name =  $request->get('model_name');
        $cpu->manufacturer = $request->get('manufacturer');
        $cpu->price = $request->get('price');
        $cpu->save();
        return redirect('CPU-record')->with('success', 'CPU Updated!');
    }

    public function destroy($id)
    {
        $cpu = cpu::find($id);
        $cpu->delete();
        return redirect('CPU-record')->with('success', 'CPU Deleted!');
    }
}
