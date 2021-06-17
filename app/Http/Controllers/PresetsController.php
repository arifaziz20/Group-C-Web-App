<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\preset;
use DB;

$GLOBALS['filteredprsets'] = '';
class PresetsController extends Controller
{

    public function index()
    {
        $presets = preset::all();
        return view ('pcpopularpreset', compact ('presets'));
    }

    public function budget(Request $request)
    {


        $request->validate([
            'budget'=>'required',
        ]);

        $budget = $request->get('budget');


        if ($budget<0)
        {
            $message = 'Please input a positive number.';
         //   $GLOBALS['filteredprsets'] = preset::all();
        }
        else if ($budget >= 0 && $budget < 500)
        {
            $message = 'Sorry we dont have any suggestion for your budget range.';
           // $GLOBALS['filteredprsets'] = preset::all();
        }
        else if ($budget>= 500 && $budget < 1500)
        {
            $message = 'Showing builds in budget of ragne RM500 to RM 1,500.';
           // $GLOBALS['filteredprsets'] = DB::table("presets")->where(["total_price">=500],["total_price"<1500])->get();
        }
        else if ($budget>= 1500 && $budget < 3000)
        {
            $message = 'Showing builds in budget of ragne RM1500 to RM 3,000.';
          //  $GLOBALS['filteredprsets'] = DB::table("presets")->where(["total_price">=1500],["total_price"<3000])->get();
        }
        else
        {
            $message = 'Sorry we dont have any suggestion for your budget range.';
           // $GLOBALS['filteredprsets'] = preset::all();
        }

        return redirect('popularpreset')->with('success', $message);
    }

}
