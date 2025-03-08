<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventPackage extends Model
{
    use HasFactory;

    protected $table = 'event_packages'; 

    protected $fillable = [
        'name',
        'description',
        'price',
        'party_type',
        'photography',
        'extra_decorations',
        'corporate_catering',
        'birthday_cake',
        'image_url'
    ];
}
