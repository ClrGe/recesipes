<?php

namespace App\Models\Recipes;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RecipeDetails extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'cook_duration',
        'resting_duration',
        'preparation_duration',
        'likes_total',
        'price_range',
        'difficulty',

    ];
}


