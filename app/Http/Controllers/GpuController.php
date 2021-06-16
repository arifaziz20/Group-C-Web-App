<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\gpu;

class GpuController extends Controller
{
    public function index()
    {
        $gpus = gpu::all();
        return view ('admindashboard.gpu.index', compact ('gpus'));
    }

    public function create()
    {
        return view('admindashboard.gpu.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'chipset'=>'required',
            'length'=>'required',
            'memory_type'=>'required',
            'vram'=>'required',
            'price'=>'required'
        ]);
        $gpu = new gpu([
            'name' =>  $request->get('name'),
            'chipset' => $request->get('chipset'),
            'length' => $request->get('length'),
            'memory_type' => $request->get('memory_type'),
            'vram' => $request->get('vram'),
            'price' => $request->get('price')
        ]);
        $gpu->save();
        return redirect('GPU-record')->with('success', 'GPU Saved!');
    }

    public function edit($id)
    {
        $gpu = gpu::find($id);
        return view('admindashboard.gpu.edit', compact('gpu'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name'=>'required',
            'chipset'=>'required',
            'length'=>'required',
            'memory_type'=>'required',
            'vram'=>'required',
            'price'=>'required'
        ]);
        $gpu = gpu::find($id);
        $gpu->name =  $request->get('name');
        $gpu->chipset = $request->get('chipset');
        $gpu->length = $request->get('length');
        $gpu->memory_type = $request->get('memory_type');
        $gpu->vram = $request->get('vram');
        $gpu->price = $request->get('price');
        $gpu->save();
        return redirect('GPU-record')->with('success', 'GPU Updated!');
    }

    public function destroy($id)
    {
        $gpu = gpu::find($id);
        $gpu->delete();
        return redirect('GPU-record')->with('success', 'GPU Deleted!');
    }
}
