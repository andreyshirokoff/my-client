<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserTariff extends Model
{
    protected $table = 'user_tariffs';
    use HasFactory;

    protected $fillable = [
        'id',
        'user_id',
        'tariff_id',
        'date_start',
        'date_end',
        'is_active'
    ];

    protected $casts = [
        'date_start' => 'datetime',
        'date_end' => 'datetime',
    ];


    public function tariff()
    {
        return $this->belongsTo(Tariff::class);
    }

    public static function getArray()
    {
        $class = new self();
        return $class->all();
    }

    public static function getDate($dateString)
    {
        $date = Carbon::createFromFormat('Y-m-d H:i:s', $dateString);
        return $date->format('d.m.Y H:i:s');
    }
}
