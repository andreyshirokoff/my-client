<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserTariff extends Model
{
    protected $table = 'user_tariffs';
    use HasFactory;

    protected $fillable = [
        'user_id',
        'tariff_id',
        'date_start',
        'date_end',
        'is_active'
    ];

    public function tariff()
    {
        return $this->belongsTo(Tariff::class);
    }
}
