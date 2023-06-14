<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserRequisite extends Model
{
    use HasFactory;

    protected $table = 'user_requisites';

    protected $fillable = ['user_id', 'title', 'address', 'nip'];
}
