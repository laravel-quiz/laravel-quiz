<?php

namespace App\Services;

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

    public function store($request,$imgname)
    {
        
            $imagename = $imgname;
            try{

                $this->user->name = $request->name;
                $this->user->email = $request->email;
                $this->user->password =Hash::make( $request->password);
                $this->user->role_id = $request->role_id;
                $this->user->image = $imgname;
                $storeData = $this->user->save();
                return $storedata;
        }
        catch(Exception $e)
        {
            throw $e;
        }
    }
}