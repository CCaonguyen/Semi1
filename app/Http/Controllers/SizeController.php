<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\size;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Eloquent\Model;

class SizeController extends Controller
{
    public function getAllSize()
    {
         $size = Size::All();
        
        return view('admin.admin-Size',  compact("size"));
    }



    public function createSize(Request $request)
    {
        $size= new Size;
        $size->sizeID = $request->sizeID;
        $size->sizeName =  $request->sizeName;
        $size->description = $request->description;
       
        
        $size->save();
       
         return redirect()->route('admin-size');
    }

    public function deleteSize($sizeID)
    {
        $size = Size::find($sizeID);
        $size->delete();
        return back();
    }
    public function updateSize(Request $request, $sizeID)
    {
        $size = Size::find($sizeID);
        $size->sizeID = $request->sizeID;
        $size->sizeName = $request->sizeName;
        $size->description = $request->description;
       
        $size->save();
        return back();

    
    }
    public function getUpdateSize($sizeID)
    {
        $data['size'] = Size::find($sizeID);
        return view('admin.admin-updateSize',$data);
    }

}
