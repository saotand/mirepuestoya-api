<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarBrand extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'image',
        'description',
        'counter',
        'active'
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];
}