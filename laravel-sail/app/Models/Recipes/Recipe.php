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
        'guest_number',
        'category_id',
        'description',
        'steps',        
        'cook_duration',
        'resting_duration',
        'preparation_duration',
        'price_range',
        'difficulty',
    ];
}
