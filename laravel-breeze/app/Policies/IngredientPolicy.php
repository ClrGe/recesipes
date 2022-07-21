<?php

namespace App\Policies;


use App\Models\Recipes\Ingredient;
use App\Models\Users\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class IngredientPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param User $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param User $user
     * @param Ingredient $ingredient
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, Ingredient $ingredient)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     *
     * @param User $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param User $user
     * @param Ingredient $ingredient
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, Ingredient $ingredient)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param User $user
     * @param Ingredient $ingredient
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, Ingredient $ingredient)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param User $user
     * @param Ingredient $ingredient
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, Ingredient $ingredient)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param User $user
     * @param Ingredient $ingredient
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, Ingredient $ingredient)
    {
        //
    }
}
