<?php

namespace App\Models\UserRecipe;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evaluation extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'date',
        'comment',
        'recipe_id',
        'user_id',
        'rating',
    ];
}
