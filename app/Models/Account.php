<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'first_name', 'last_name'];

    public function phones()
    {
        return $this->hasMany(Phone::class);
    }
}
