<?php

namespace App\Http\Controllers;
use App\Setting;

use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function update(Request $request){
        $quantity = Setting::where('name','=','question-quantity')->first();
        $quantity->value = $request->quantity;
        $quantity->save();
        return 'done i guess';
    }
}
