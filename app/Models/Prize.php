<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prize extends Model
{
    use HasFactory;

    protected $fillable = [
            'user_id',
            'title',
            'image',
            'first_prize',
            'second_prize',
            'third_prize',
            'fourth_prize',
            'fifth_prize',
    ];

    protected $dates = ["created_at"];
}
