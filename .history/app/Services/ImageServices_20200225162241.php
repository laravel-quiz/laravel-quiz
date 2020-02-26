<?php

namespace App\Services;

use Intervention\Image\Facades\Image;

class ImageServices
{
    public function imageMoveWithName($data){

        if($data->hasFile('image')){
            $image = $request->file('image');
            $random_name = md5(rand().time().rand());
            $imageName = $random_name . '.'. $image->getClientOriginalExtension();
            $avatar = Image::make($image)->resize(100,100);
            $image->move(public_path('images/users'),$imageName);
            $avatar->save(public_path('images/users/avatar/'.$imageName));
            $avatar->save();
        }
        return $imageName;
    }
}
