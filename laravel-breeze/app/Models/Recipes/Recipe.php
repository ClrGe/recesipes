<?php

namespace App\Models\Recipes;

use App\Models\Users\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

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
        'user_id',
        'publish_time',
    ];

    public function user(): HasOne
    {
        return $this->hasOne(User::class);
    }

    public function quantities() : BelongsTo
    {
        return $this->belongsTo(Quantity::class);
    }

    public function evaluations(): BelongsToMany
    {
        return $this->belongsToMany(User::class, "evaluations");
    }

    public function ingredients(): BelongsToMany
    {
        return $this->belongsToMany(Ingredient::class);
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

}
