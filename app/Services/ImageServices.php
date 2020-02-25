<?php

namespace App\Services;

class ImageServices
{
    public function imageMoveWithName($data){
        $imageName = time().'.'.$data->getClientOriginalExtension();
        $data->move(public_path('img'),$imageName);
        return $imageName;
    }
}