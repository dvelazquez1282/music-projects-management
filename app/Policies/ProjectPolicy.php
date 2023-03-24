<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ProjectPolicy
{
    use HandlesAuthorization;


    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    public function show(User $user) {
        return true;
    }
    public function index(User $user) {
        return true;
    }
    public function store(User $user) {
        return true;
    }
    public function update(User $user) {
        return true;
    }
    public function destroy(User $user) {
        return true;
    }


}
