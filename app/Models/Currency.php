<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Currency extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = [
        'id',
        'name',
        'symbol',
        'name_min',
        'symbol_min'
    ];

//    public static function uriKey()
//    {
//        return 'roles';
//    }
}
