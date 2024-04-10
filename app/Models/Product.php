<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public $timestamps = false; // Disable timestamps

    protected $fillable = [
        'category',
        'name',
        'description',
        'picture',
        'price',
        'stock'
    ];
}
