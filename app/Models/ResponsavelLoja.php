<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResponsavelLoja extends Model
{
    use HasFactory;


    protected $connection = 'loja';


    protected $table = 'responsavels';


    protected $fillable = [
        'parceira_id',
        'user_id',
        'adminstrador'
    ];


    public function user()
    {
        return $this->belongsTo(UserLoja::class,'user_id','id');
    }
}
