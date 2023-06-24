<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuestionSupport extends Model
{
    protected $table = 'question_supports';
    use HasFactory;

    protected $fillable = [
        'name',
        'phone',
        'created_at',
    ];
}
