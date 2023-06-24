<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TechSupport extends Model
{
    protected $table = 'tech_supports';
    use HasFactory;

    protected $fillable = [
        'id',
        'user_id',
        'name',
        'phone',
        'email',
        'text',
        'created_at',
    ];
}
