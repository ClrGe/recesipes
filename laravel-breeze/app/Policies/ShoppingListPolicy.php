<?php

namespace App\Policies;

use App\Models\ShoppingList;
use App\Models\Users\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ShoppingListPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\Users\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\Users\User  $user
     * @param  \App\Models\ShoppingList  $shoppingList
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, ShoppingList $shoppingList)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\Users\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\Users\User  $user
     * @param  \App\Models\ShoppingList  $shoppingList
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, ShoppingList $shoppingList)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\Users\User  $user
     * @param  \App\Models\ShoppingList  $shoppingList
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, ShoppingList $shoppingList)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\Users\User  $user
     * @param  \App\Models\ShoppingList  $shoppingList
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, ShoppingList $shoppingList)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\Users\User  $user
     * @param  \App\Models\ShoppingList  $shoppingList
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, ShoppingList $shoppingList)
    {
        //
    }
}
