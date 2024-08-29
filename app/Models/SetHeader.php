<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SetHeader extends Model
{
    use HasFactory;

    protected $fillable = [
        'logo',
        'field1',
        'field2',
        'field3',
        'field4',
        'field5',
        'field6',
    ];
}
