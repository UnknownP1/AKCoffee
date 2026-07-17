<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'category', 'price', 'status', 
        'image', 'is_best_seller', 'best_seller_order', 
        'description' // <-- Tambahkan ini!
    ];
}