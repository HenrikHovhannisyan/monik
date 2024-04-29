<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';

    protected $fillable = [
        'code',
        'name_am',
        'name_ru',
        'name_en',
        'description_am',
        'description_ru',
        'description_en',
        'price',
        'discount',
        'images',
        'size',
        'gender',
        'color',
        'quantity',
        'status',
        'category_id',
    ];

    protected $casts = [
        'images' => 'array',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
