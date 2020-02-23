<?php
namespace App\Policies;

use App\User;
class UserServices
{
    public function __construct(User $user)
    {
        $this->user = $user;
    }
    public function getById($id)
    {
        return $this->user->where('id','=',$id)->first();
    }
}