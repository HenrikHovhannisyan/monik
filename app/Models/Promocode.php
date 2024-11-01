<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promocode extends Model
{
    use HasFactory;
    protected $fillable = ['code', 'discount', 'type', 'status', 'expiry_date'];

    public function isExpired()
    {
        return $this->expiry_date && $this->expiry_date < now();
    }
}
