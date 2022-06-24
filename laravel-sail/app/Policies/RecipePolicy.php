<?php

namespace App\Policies;

use App\Models\Recipes\Recipe;
use App\Models\Users\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Support\Facades\DB;

class RecipePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Recipe  $recipe
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, Recipe $recipe)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        return ($user->role == "Administrator" || $user->role == "Editeur");
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Recipe  $recipe
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, Recipe $recipe)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Recipe  $recipe
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, Recipe $recipe)
    {
        $publication = DB::select("SELECT * FROM publications WHERE publications.recipe_id = $recipe->id");
        return ($publication[0]->user_id == $user->id || $user->role == "Administrator");
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Recipe  $recipe
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, Recipe $recipe)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Recipe  $recipe
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, Recipe $recipe)
    {
        //
    }
}
