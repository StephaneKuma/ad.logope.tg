<?php

namespace App\Policies;

use App\Models\Activity;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ActivityPolicy
{
    use HandlesAuthorization;

    public function before(User $user, $ability)
    {
        if ($user->isAdmin()) {
            return true;
        }
    }

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return true;
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\User  $user
     * @param  \App\Models\Activity  $activity
     * @return mixed
     */
    public function view(User $user, Activity $activity)
    {
        return true;
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->isEditor();
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\User  $user
     * @param  \App\Models\Activity  $activity
     * @return mixed
     */
    public function update(User $user, Activity $activity)
    {
        return $user->id === $activity->user_id;
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\Models\Activity  $activity
     * @return mixed
     */
    public function delete(User $user, Activity $activity)
    {
        return $user->id === $activity->user_id;
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\User  $user
     * @param  \App\Models\Activity  $activity
     * @return mixed
     */
    public function restore(User $user, Activity $activity)
    {
        return $user->id === $activity->user_id;
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\Models\Activity  $activity
     * @return mixed
     */
    public function forceDelete(User $user, Activity $activity)
    {
        return $user->id === $activity->user_id;
    }
}
