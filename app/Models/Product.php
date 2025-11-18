<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';

    protected $fillable = [
        'code',
        'name_hy',
        'name_ru',
        'name_en',
        'slug',
        'description_hy',
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

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($product) {
            $product->slug = Str::slug($product->name_en);
        });

        static::updating(function ($product) {
            $product->slug = Str::slug($product->name_en);
        });
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function metadata()
    {
        return $this->hasOne(ProductMetadata::class);
    }
}
