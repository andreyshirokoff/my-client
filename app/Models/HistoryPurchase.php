<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HistoryPurchase extends Model
{
    protected $table = 'history_purchases';
    use HasFactory;
    protected $fillable = [
        'id',
        'user_id',
        'product_type',
        'product_id',
        'product_title',
        'created_at'
    ];

    public static function getDate($dateString)
    {
        $date = Carbon::createFromFormat('Y-m-d H:i:s', $dateString);
        return $date->format('d.m.Y');
    }
}
