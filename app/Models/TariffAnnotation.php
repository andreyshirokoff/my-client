<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TariffAnnotation extends Model
{
    protected $table = 'tariff_annotations';

    use HasFactory;
    public $timestamps = false;

    protected $fillable = [
        'id',
        'title',
        'text'
    ];
}
