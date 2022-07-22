<?php

namespace App\Models\Recipes;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Ingredient extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'name',
    ];

    public function quantities() : BelongsToMany
    {
            return $this->belongsToMany(Quantity::class);
    }

}
