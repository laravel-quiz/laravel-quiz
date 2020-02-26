<?php

namespace App\Services;

use Intervention\Image\Facades\Image;


class ImageServices
{
    public function imageMoveWithName($image){

        //$image = $image->file('image');
        $random_name = md5(rand().time().rand());
        $new_name = $random_name . '.'. $image->getClientOriginalExtension();
        $avatar = Image::make($image)->resize(100,100);
        $image->move(public_path('images/users'),$new_name);
        $avatar->save(public_path('images/users/avatar/'.$new_name));
        $avatar->save();

        return $imageName;
    }
}
