<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'offer_text',
        'slider_heading',
        'offer_type',
        'offer_percentage',
        'offer_time',
        'product_link',
        'image'
    ];
}
