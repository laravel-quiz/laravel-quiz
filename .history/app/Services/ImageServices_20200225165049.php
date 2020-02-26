<?php

namespace App\Services;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;


class ImageServices
{
    public function imageMoveWithName($image){
        $img_path = public_path('images/users');
        $img_avatar_path = public_path('images/users/avatar');
        $imageName = md5(rand().time().rand()) . '.'. $image->getClientOriginalExtension();
        $avatar = Image::make($image)->resize(100,100);
        if(file_exists($img_path) && file_exists($img_avatar_path))
        {
            $image->move(public_path('images/users'),$imageName);
        $avatar->save(public_path('images/users/avatar/'.$imageName));
        $avatar->save();
        }

        return $imageName;
    }
}
