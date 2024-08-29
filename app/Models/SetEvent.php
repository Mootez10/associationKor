<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SetEvent extends Model
{
    use HasFactory;

    protected $fillable = [
        'picture',
        'title',
        'description',
        'location',
        'date',
    ];
}
