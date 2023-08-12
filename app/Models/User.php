<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'whatsapp',
        'cpf',
        'asaas_client',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function resgatados()
    {
        return $this->hasMany(Presente::class, 'destinatario_id', 'id');
    }

    public function envios()
    {
        return $this->hasMany(Presente::class);
    }

    public function extratos()
    {
        return $this->hasMany(Extrato::class);
    }

    public function entradas()
    {
        // dd($this->extratos);
        $busca = $this->extratos->where('tipo', 1)->sum('valor');

        return $busca;
    }

    public function saidas()
    {
        return $this->extratos->where('tipo', 2)->sum('valor');
    }

    public function saldoTotal()
    {
        return $this->entradas() - $this->saidas();
    }
}
