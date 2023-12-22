<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserLoja extends Model
{
    use HasFactory;

    protected $connection ='loja';

    protected $table = 'users';
    protected $fillable = [
        'name',
        'email',
        'password',
        'parceira_selecionada',
        'whatsapp',
        'cpf'
    ];
}
