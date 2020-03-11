<?php

namespace App\Http\Controllers;

use App\Setting;
use App\Services\ImageServices;
use Illuminate\Http\Request;
use App\User;

class SettingsController extends Controller
{
    protected $imageServices;
    protected $users;
    public function __construct(ImageServices $imageServices,User $users){
        $this->imageServices = $imageServices;
        $this->users = $users;
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
        $aspect = Setting::where('name','=','image-ratio')->first();
        return view('admin.settings.showavatar',compact('aspect'));
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

    public function userSetting()
    {
        return view('front.settings.setting');
    }

    public function displayAvatar()
    {
        $data = '';
        $aspect = Setting::where('name','=','image-ratio')->first();
        return view('front.settings.imageupload',compact('data','aspect'));
    }
    public function uploadAvatar( Request $request)
    {
        $temp = 'jdufs';
        if(array_key_exists('croppedImage',$request->all())){
            $image = $request['croppedImage'];
            $temp = $this->imageServices->imageMoveWithName($image);

        }
        //$user = $this->users->getById($request['id']);
        $user = User::find($request['userid']);
        $user->image = $temp;
        $user->save();

    }

}
