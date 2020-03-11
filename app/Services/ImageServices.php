<?php

namespace App\Services;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use App\Setting;


class ImageServices
{
    public function imageMoveWithName($image){
        $aspect = Setting::where('name','=','image-ratio')->first();
        $temp = explode('/',$aspect->value);
        $img_path = public_path('images/users');
        $img_avatar_path = public_path('images/users/avatar');
        $imageName = md5(rand().time().rand()) . '.'. $image->getClientOriginalExtension();
        $x = (int)$temp[0];
        $y = (int)$temp[1];
        $avatar = Image::make($image)->resize(25*$x,25*$y);
        if(file_exists($img_path) && file_exists($img_avatar_path))
        {
            $image->move(public_path('images/users'),$imageName);
            $avatar->save(public_path('images/users/avatar/'.$imageName));
            $avatar->save();
        }

        return $imageName;
    }
}
