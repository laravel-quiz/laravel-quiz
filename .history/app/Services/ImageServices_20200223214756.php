<?php

namespace App\Services;

class ImageServices
{
    public function imageMoveWithName($data){
        $imageName = time().'.'.$data->getClientOriginalExtention();
        $data->move(public_path('img'),$imageName);
        return $imageName;
    }
}