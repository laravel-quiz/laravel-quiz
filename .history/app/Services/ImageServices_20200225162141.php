<?php

namespace App\Services;

class ImageServices
{
    public function imageMoveWithName($data){

        if($data->hasFile('image')){
            $image = $request->file('image');
            $random_name = md5(rand().time().rand());
            $new_name = $random_name . '.'. $image->getClientOriginalExtension();
            $avatar = Image::make($image)->resize(100,100);
            $image->move(public_path('images/users'),$new_name);
            $avatar->save(public_path('images/users/avatar/'.$new_name));
            $avatar->save();
        }
        $imageName = md5(rand().time().rand()).'.'.$data->getClientOriginalExtension();
        $data->move(public_path('images/users/'),$imageName);
        return $imageName;
    }
}
