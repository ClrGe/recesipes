<?php

namespace App\Policies;

use App\Models\Recipes\Evaluation;
use App\Models\Users\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class EvaluationPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\Users\Users\Users\Users\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\Users\Users\Users\Users\User  $user
     * @param  \App\Models\Users\Users\Users\Users\Evaluation  $evaluation
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, Evaluation $evaluation)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\Users\Users\Users\Users\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\Users\Users\Users\Users\User  $user
     * @param  \App\Models\Users\Users\Users\Users\Evaluation  $evaluation
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, Evaluation $evaluation)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\Users\Users\Users\Users\User  $user
     * @param  \App\Models\Users\Users\Users\Users\Evaluation  $evaluation
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, Evaluation $evaluation)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\Users\Users\Users\Users\User  $user
     * @param  \App\Models\Users\Users\Users\Users\Evaluation  $evaluation
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, Evaluation $evaluation)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\Users\Users\Users\Users\User  $user
     * @param  \App\Models\Users\Users\Users\Users\Evaluation  $evaluation
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, Evaluation $evaluation)
    {
        //
    }
}
