<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeacherLevel4 extends Model
{
    use HasFactory;

    protected $fillable = [
        'picture',
        'name',
        'job',
        
    ];
}
