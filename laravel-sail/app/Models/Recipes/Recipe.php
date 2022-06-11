<?php

namespace App\Models\Recipes;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'name',
        'category_id',
        'ingredients_id',
        'description',
        'detail_id',
        'steps',
        'media_id',

    ];
}
