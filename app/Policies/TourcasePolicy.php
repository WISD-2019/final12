<?php

namespace App\Policies;

use App\Staff;
use App\Tourcase;
use Illuminate\Auth\Access\HandlesAuthorization;

class TourcasePolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }
    public function destroy(Staff $staff, Tourcase $tourcase)
    {
        return $staff->id === $tourcase->staff_id;
    }
}
