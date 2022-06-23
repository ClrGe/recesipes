<?php

namespace App\Models\Recipes;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'description',
        'alt',
        'path',
    ];

}
