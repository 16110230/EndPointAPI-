<?php

namespace App\Policies;

use App\User;
use App\Session;
use Illuminate\Auth\Access\HandlesAuthorization;

class SessionPolicy
{
    use HandlesAuthorization;

    public function update(User $user, Session $session){
        return $user->ownsSession($session); 
    }
     public function delete(User $user, Session $session){
        return $user->ownsSession($session); 
    }
}
