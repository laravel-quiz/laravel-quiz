<?php
namespace App\Services;

use App\User;
use App\Services\ImageServices;

class UsersServices
{

    public function __construct(User $user,ImageServices $imageServices)
    {
        $this->user = $user;
    }

    public function get()
    {
        return $this->user->get();
    }

    public function store($request)
    {
        $request['image'] = $this->imageServices->imageMoveWithName($image);
        return $this->user->create($request);
    }
}