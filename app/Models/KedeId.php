<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KedeId extends Model
{
    use HasFactory;

    protected $fillable = ['poster','link_poster'];
}
