<?php

namespace App\Services;

class ImageServices
{
    public function imageMoveWithName($data){
        $imageName = md5(rand().time().rand())'.'.$data->getClientOriginalExtension();
        $data->move(public_path('img'),$imageName);
        return $imageName;
    }
}
