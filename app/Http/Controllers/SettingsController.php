<?php

namespace App\Http\Controllers;

use App\Setting;
use App\Services\ImageServices;
use Illuminate\Http\Request;
use App\User;

class SettingsController extends Controller
{
    protected $imageServices;
    public function __construct(ImageServices $imageServices){
        $this->imageServices = $imageServices;
    }

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


    public function showAvatar(){
        return view('admin.settings.showavatar');
    }


    public function updateAvatar(Request $request){
        $temp = 'dfsdf';
        
        if (array_key_exists('croppedImage', $request->all())) {
            $image = $request['croppedImage'];
            $temp = $this->imageServices->imageMoveWithName($image);
        }
        
        $user = User::find($request['userid']);
        $user->image = $temp;
        $user->save();
        
        
        return 'done i guess';
    }

}
