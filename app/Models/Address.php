<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'city', 'state', 'address', 'address2', 'postcode'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
