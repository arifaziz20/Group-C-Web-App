<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pc_builder;
use App\Models\cpu;
use App\Models\gpu;
use App\Models\motherboard;
use App\Models\psu;
use App\Models\ram;
use App\Models\storage;
use App\Models\preset;

class BuilderController extends Controller
{
    public function addcpu($id)
    {
        $currbuilder= pc_builder::find(1);
        $cpu= cpu::find($id);
        $currbuilder->cpu = $cpu->id;
        $currbuilder->save();
        return redirect('pcbuilder');
    }
    public function addgpu($id)
    {
        $currbuilder= pc_builder::find(1);
        $gpu= gpu::find($id);
        $currbuilder->gpu = $gpu->id;
        $currbuilder->save();
        return redirect('pcbuilder');
    }
    public function addmotherboard($id)
    {
        $currbuilder= pc_builder::find(1);
        $motherboard= motherboard::find($id);
        $currbuilder->motherboard = $motherboard->id;
        $currbuilder->save();
        return redirect('pcbuilder');
    }
    public function addpsu($id)
    {
        $currbuilder= pc_builder::find(1);
        $psu= psu::find($id);
        $currbuilder->psu = $psu->id;
        $currbuilder->save();
        return redirect('pcbuilder');
    }
    public function addram($id)
    {
        $currbuilder= pc_builder::find(1);
        $ram= ram::find($id);
        $currbuilder->ram = $ram->id;
        $currbuilder->save();
        return redirect('pcbuilder');
    }
    public function addstorage($id)
    {
        $currbuilder= pc_builder::find(1);
        $storage= storage::find($id);
        $currbuilder->storage = $storage->id;
        $currbuilder->save();
        return redirect('pcbuilder');
    }

    public function reset(Request $request)
    {
        $currbuilder= pc_builder::find(1);
        $currbuilder->delete();
        $newbuilder = new pc_builder;
        $newbuilder->id = 1;
        $newbuilder->save();
        return redirect('pcbuilder')->with('success', 'PC Builder have been reset!');
    }

    public function save(Request $request)
    {
        $request->validate([
            'cpu'=>'required',
            'gpu'=>'required',
            'motherboard'=>'required',
            'psu'=>'required',
            'ram'=>'required',
            'storage'=>'required'
        ]);
        $currbuilder= pc_builder::find(1);

        $cpuid = $currbuilder->cpu;
        $gpuid = $currbuilder->gpu;
        $motherboardid = $currbuilder->motherboard;
        $psuid = $currbuilder->psu;
        $ramid = $currbuilder->ram;
        $storageuid = $currbuilder->storage;

        $cpuprice = cpu::find($cpuid)->price;
        $gpuprice = gpu::find($gpuid)->price;
        $motherboardprice = motherboard::find($motherboardid)->price;
        $psuprice = psu::find($psuid)->price;
        $ramrice = ram::find($ramid)->price;
        $storageprice = storage::find($storageuid)->price;

        $totalprice = $cpuprice + $gpuprice + $motherboardprice + $psuprice + $ramrice + $storageprice;

        $preset = new preset([
            'cpu'=>$cpuid,
            'gpu'=>$gpuid,
            'motherboard'=>$motherboardid,
            'psu'=>$psuid,
            'ram'=>$ramid,
            'storage'=>$storageuid,
            'total_price' => $totalprice
        ]);
        $preset->save();
        $currbuilder->delete();
        $newbuilder = new pc_builder;
        $newbuilder->id = 1;
        $newbuilder->save();
        return redirect('pcbuilder')->with('success', 'Preset Saved!');
    }
}
