<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AjaxController extends Controller
{
    public function store(Request $request){
        return ($request->file('image'));
        if($request->hasFile('image')){
            $image = $request->file('croppedImage');
          // $imageName = getClientOriginalName();
           return $image;
        }
    }
}
