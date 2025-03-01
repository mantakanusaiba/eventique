<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WeddingPackage extends Model
{
    use HasFactory;

    
    protected $table = 'wedding_packages';  

    
    protected $fillable = [
        'name', 
        'price', 
        'description', 
        'wedding_type', 
        'photography', 
        'wedding_cake', 
        'extra_decorations',
    ];

    
    protected $casts = [
        'photography' => 'boolean',
        'wedding_cake' => 'boolean',
        'extra_decorations' => 'boolean',
    ];
}