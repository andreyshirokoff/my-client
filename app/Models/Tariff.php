<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tariff extends Model
{
    protected $table = 'tariffs';

    use HasFactory;

    protected $fillable = [
        'id',
        'title',
        'price',
        'announce',
        'detail_text',
        'trial',
        'annotation_id',
        'is_test',
        'is_actual'
    ];

    public static function getAnnotation($annotation_id)
    {
        return TariffAnnotation::where('id', $annotation_id)->first();
    }

    public function tariffAnnotation()
    {
        return $this->belongsTo(TariffAnnotation::class);
    }

    public static function getArray()
    {
        $class = new self();
        return $class->all();
    }

    public static function getListList($id)
    {
        $listEncode = self::where('id', $id)->first()->list;
        return json_decode($listEncode,1);
    }

}