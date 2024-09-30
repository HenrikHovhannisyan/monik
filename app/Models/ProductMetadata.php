<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductMetadata extends Model
{
    protected $table = 'product_metadata';

    protected $fillable = [
        'product_id',
        'primary_price',
        'product_link',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}

