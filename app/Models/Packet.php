<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Packet extends Model
{
    protected $table = 'packets';
    use HasFactory;

    protected $fillable = [
        'id',
        'title',
        'price',
        'price_for_item',
        'quantity',
        'is_test',
        'is_active',
    ];

    public static function getArray()
    {
        $class = new self();
        return $class->all();
    }
}
