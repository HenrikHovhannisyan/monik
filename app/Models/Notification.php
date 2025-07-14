<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Notification extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'title_hy',
        'title_ru',
        'title_en',
        'message_hy',
        'message_ru',
        'message_en',
        'status',
        'link',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
