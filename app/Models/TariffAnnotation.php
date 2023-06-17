<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TariffAnnotation extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = [
        'id',
        'title',
        'text'
    ];

//    public static function uriKey()
//    {
//        return 'roles';
//    }
}
