<?php
namespace App\Policies;

use App\Models\User;
use App\Models\posts;

class PostPolicy
{
    public function view(User $user, posts $post)
    {
        return true; 
    }

    public function create(User $user)
    {
        return $user->role === 'admin'; 
    }

    public function update(User $user)
    {
        return $user->role === 'admin'; 
    }

    public function delete(User $user)
    {
        return $user->role === 'admin'; 
    }
}
