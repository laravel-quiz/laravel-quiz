<?php
namespace App\Services;

use App\User;
use App\Services\ImageServices;
use Illuminate\Support\Facades\Hash;

class UsersServices
{

    public function __construct(User $user,ImageServices $imageServices)
    {
        $this->user = $user;
        $this->imageServices = $imageServices;
    }

    public function get()
    {
        return $this->user->get();
    }

    public function store($request)
    {
        $image = $request['image'];
        $request['password'] = Hash::make($request['password']);
        $request['image'] = $this->imageServices->imageMoveWithName($image);
        return $this->user->create($request);
    }
    public function update($data,$id)
    {
        $image = $data['image'];
        $data['image'] = $this->imageServices->imageMoveWithName($image);
        $updatedUser =  $this->user->update($data);
        return $updatedUser;
    }

    public function destroy($id)
    {
        return $this->user->delete($id);
    }
}