<?php

namespace App\Services;

class ImageServices
{
    public function imageMoveWithName($data){
        dd($data);
        $imageName = md5(rand().time().rand()).'.'.$data->getClientOriginalExtension();
        $data->move(public_path('images/users/'),$imageName);
        return $imageName;
    }
}
