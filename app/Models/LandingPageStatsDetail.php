<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LandingPageStatsDetail extends Model
{
    use HasFactory;

    protected $fillable = ['caption_kiri','caption_tengah','caption_kanan'];
}
