<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Extrato extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'tipo',
        'valor',
        'descricao',
        'user_id'
    ];


    public function getStatusFormatedAttribute()
    {
        if ($this->attributes['tipo'] == 2) {
            return 'Saida';
        }
        return 'Entrada';
    }
}
