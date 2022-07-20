<?php

namespace App\Models\Recipes;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Steps extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'step',
        'recipe_id',
        'created_at',
        'updated_at',
    ];
}
