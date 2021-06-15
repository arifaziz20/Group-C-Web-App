<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\preset;
use App\Models\pc_builder;
use App\Models\cpu;
use App\Models\gpu;
use App\Models\motherboard;
use App\Models\psu;
use App\Models\ram;
use App\Models\storage;

class PresetsController extends Controller
{
    public function index()
    {
        $presets = preset::all();
        return view ('pcpopularpreset', compact ('presets'));
    }

    public function create(Request $request)
    {
        $request->validate([
            'cpu'=>'required',
            'gpu'=>'required',
            'motherboard'=>'required',
            'psu'=>'required',
            'ram'=>'required',
            'storage'=>'required'
        ]);
        $cpuid = $request->get('cpu');
        $cpuprice = cpu::find($cpuid);
        $gpuid = $request->get('gpu');
        $gpuprice = gpu::find($gpuid);
        $motherboardid = $request->get('motherboard');
        $motherboardprice = motherboard::find($motherboardid);
        $psuid = $request->get('psu');
        $psuprice = psu::find($psuid);
        $ramuid = $request->get('ram');
        $ramrice = ram::find($ramuid);
        $storageuid = $request->get('storage');
        $storageprice = storage::find($storageuid);
        $totalprice = $cpuprice + $gpuprice + $motherboardprice + $psuprice + $ramrice + $storageprice;
        $preset = new preset([
            'cpu'=>$request->get('cpu'),
            'gpu'=>$request->get('gpu'),
            'motherboard'=>$request->get('motherboard'),
            'psu'=>$request->get('psu'),
            'ram'=>$request->get('ram'),
            'storage'=>$request->get('storage'),
            'total_price' => $totalprice
        ]);
        $preset->save();
        return redirect('pcbuilder')->with('success', 'Preset Saved!');
    }


}
