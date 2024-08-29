<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConfigHome extends Model
{
    use HasFactory;

    protected $fillable = [
        'banner',
        'banner2',
        'nameSourra',
        'logo',
        'descAssociation',
        'activities',
        'services',
        'service_item_icon',
        'service_item_title',
        'service_item_desc',
        'upcoming_events',
        'upcoming_event_banner',
        'upcoming_event_title',
        'upcoming_event_datetime',
        'upcoming_event_descp',
    ];

}
