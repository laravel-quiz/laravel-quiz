<?php

namespace App\Services;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Intervention\Image\Facades\Image;
use App\User;

class UsersServices
{
    public function __construct(User $user)
    {
        $this->user = $user;
    }
    public function get()
    {
        return $this->user->get();
    }

    public function store($data,$new_name)
    {
            
            try{
                return $this->user->create($data);
        }
        catch(Exception $e)
        {
            throw $e;
        }
    }
}