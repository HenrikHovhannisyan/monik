<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name_hy',
        'name_ru',
        'name_en',
        'description_hy',
        'description_ru',
        'description_en',
        'image',
    ];

    public function products()
    {
        return $this->hasMany(Product::class);
    }

}
