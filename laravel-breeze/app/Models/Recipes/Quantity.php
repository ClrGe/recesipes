<?php

namespace App\Models\Recipes;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Quantity extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',

        'ingredient_id',
        'recipe_id',

        'quantity',
        'unit',
    ];

    public function ingredient(): BelongsTo
    {
        return $this->belongsTo(Ingredient::class);
    }

}
