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
                $this->user->email = $data->email;
                $this->user->password =Hash::make($data->password);
                $this->user->role_id = $data->role_id;
                $this->user->image = $new_name;
                $this->user->name = $data->name;
                $storeData = $this->user->save();
                return $storeData;
        }
        catch(Exception $e)
        {
            throw $e;
        }
    }
}