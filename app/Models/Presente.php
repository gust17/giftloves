<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Presente extends Model
{
    use HasFactory;


    protected $fillable = [
        'presenteado',
        'nascimento',
        'telefone',
        'valor',
        'mensagem',
        'code',
        'user_id',
        'cartao_id',
        'presenteado_id',
        'asaas_id',
        'status'
    ];


    public function cartao()
    {
        return $this->belongsTo(Cartao::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
