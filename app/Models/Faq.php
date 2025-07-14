<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'question_hy',
        'question_ru',
        'question_en',
        'answer_hy',
        'answer_ru',
        'answer_en',
        'status',
    ];
}
