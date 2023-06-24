<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserPacket extends Model
{
    protected $table = 'user_packets';
    use HasFactory;

    protected $fillable = [
        'id',
        'user_id',
        'packet_id',
        'date_start',
    ];

    public static function getArray()
    {
        $class = new self();
        return $class->all();
    }
}
