<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';

    protected $fillable = [
        'title',
        'photos',
        'description',
        'price',
        'size',
        'thickness',
        'category',
        'tags',
        'specifications',
    ];

    protected $casts = [
        'photos' => 'array',
        'tags' => 'array',
        'specifications' => 'array',
    ];
}
