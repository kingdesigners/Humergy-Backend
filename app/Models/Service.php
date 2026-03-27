<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'service_slug',
        'price_per_gal',
        'status',
        'icon',
    ];

    protected $casts = [
        'price_per_gal' => 'decimal:2',
        'status' => 'boolean',
    ];

    protected static function booted()
    {
        static::saved(function ($service) {
            \App\Helpers\FirebaseHelper::syncServiceRate($service);
        });
    }

}