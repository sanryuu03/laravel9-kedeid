<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LandingPageHeader extends Model
{
    use HasFactory;

    protected $fillable = ['picture_path'];
}
