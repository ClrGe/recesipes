<?php

namespace App\Models\Recipes;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quantity extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'ingredient_id',
        'recipe_id',
        'quantity',
    ];

}
