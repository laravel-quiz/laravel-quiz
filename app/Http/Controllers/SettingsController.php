<?php

namespace App\Http\Controllers;
use App\Setting;

use Illuminate\Http\Request;

class SettingsController extends Controller
{

    public function index(){
        $quantity = Setting::where('name','=','question-quantity')->first();
        $minQuestion = Setting::where('name','=','min-correct-question')->first();
        return view('admin.settings.index',compact('quantity','minQuestion'));
    }

    public function update(Request $request){
        $quantity = Setting::where('name','=','question-quantity')->first();
        $quantity->value = $request->quantity;
        $quantity->save();
        $minQuestion = Setting::where('name','=','min-correct-question')->first();
        $minQuestion->value = $request->min_question;
        $minQuestion->save();

        return redirect()->route('settings.index')->with('success','Changed Successfully!!!!');
    }
}
