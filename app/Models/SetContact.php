<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SetContact extends Model
{
    use HasFactory;

    protected $fillable = [
        'icon1',
        'title1',
        'location',
        'email',
        'icon2',
        'title2',
        'phone1',
        'phone2',
        'icon3',
        'title3',
        'email1',
        'email2',
        
    ];
}
