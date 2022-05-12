<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TutorialMendaftar extends Model
{
    use HasFactory;

    protected $fillable = ['header','link_youtube'];
}
