<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parceira extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'site',
        'endereco',
        'facebook',
        'instagram',
        'tiktok',
        'pix',
    ];
}
