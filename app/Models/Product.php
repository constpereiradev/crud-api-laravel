<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory;

    //SoftDeletes p/ tornar deleted_at possível
    use SoftDeletes;

    protected $fillable = [
        'id',
        'name',
        'category',
        'status',
        'quantity',
        'updated_at',
        'created_at',
        'deleted_at',
    ];

}
