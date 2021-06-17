<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\preset;
use DB;

$GLOBALS['filteredpresets'] = '';
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
           $GLOBALS['filteredpresets'] = preset::all();
        }
        else if ($budget >= 0 && $budget < 500)
        {
            $message = 'Sorry we dont have any suggestion for your budget range.';
            $GLOBALS['filteredpresets'] = preset::all();
        }
        else if ($budget>= 500 && $budget < 1500)
        {
            $message = 'Showing builds in budget of ragne RM500 to RM 1,500.';
            $GLOBALS['filteredpresets'] = preset::where('total_price', '>', 500, 'and')->where('total_price', '<', 1500 );
            //DB::table("presets")->where(["total_price">=500],["total_price"<1500])->get();

        }
        else if ($budget>= 1500 && $budget < 3000)
        {
            $message = 'Showing builds in budget of ragne RM1500 to RM 3,000.';
            $GLOBALS['filteredpresets'] = preset::where('total_price', '>', 1500, 'and')->where('total_price', '<', 3000 );
           // $GLOBALS['filteredpresets'] = DB::table("presets")->where(["total_price">=1500],["total_price"<3000])->get();
        }
        else
        {
            $message = 'Sorry we dont have any suggestion for your budget range.';
            $GLOBALS['filteredpresets'] = preset::all();
        }

        return redirect('popularpreset')->with('success', $message);
    }

}
