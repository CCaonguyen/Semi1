<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\color;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Eloquent\Model;

class ColorController extends Controller
{
    public function getAllColor()
    {
         $color = Color::All();
        
        return view('admin.admin-color',  compact("color"));
    }



    public function createColor(Request $request)
    {
        $color = new Color;
        $color->colorID = $request->colorID;
        $color->colorName =  $request->colorName;
        $color->description = $request->description;
       
        
        $color->save();
       
         return redirect()->route('admin-color');
    }

    public function deleteColor($colorID)
    {
        $color = Color::find($colorID);
        $color->delete();
        return back();
    }
    public function updateColor(Request $request, $colorID)
    {
        $color = Color::find($colorID);
        $color->colorID = $request->colorID;
        $color->colorName = $request->colorName;
        $color->description = $request->description;
       
        $color->save();
        return back();

    
    }
    public function getUpdateColor($colorID)
    {
        $data['color'] = Color::find($colorID);
        return view('admin.admin-updateColor',$data);
    }

}
