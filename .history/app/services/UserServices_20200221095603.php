<?php 

namespace App\Services;

use App\User;

class UserSerivces
{
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function getById($id)
    {
        return $this->user->where('id','=',$id)->first();
    }

    public function get()
    {
        $this->user->get();
    }
}
?>