<?php

namespace App\Models;

use App\Models\Users\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Recipe extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'category_id',
        'image',
        'guest_number',
        'price_range',
        'difficulty',
        'preparation_duration',
        'resting_duration',
        'cook_duration',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function ingredients() : BelongsToMany
    {
        return $this->belongsToMany(Ingredient::class)
            ->withPivot('amount', 'unit');
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

//    public function medias() : BelongsToMany
//    {
//        return $this->belongsToMany(Media::class)
//            ->withPivot('alt', 'path');
//    }

    public function steps() : BelongsToMany
    {
        return $this->belongsToMany(Step::class)
            ->withPivot('text');
    }
}
