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
        'name_am',
        'name_ru',
        'name_en',
        'slug',
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

    public function setSlugAttribute($value)
    {
        $this->attributes['slug'] = Str::slug($this->name_en);
    }

    public function metadata()
    {
        return $this->hasOne(ProductMetadata::class);
    }


}
