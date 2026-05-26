<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contrato extends Model
{
    protected $fillable = [
        'inicio',
        'fim',
        'salario',
        'jogador_id',
        'equipe_id'
    ];

    public function equipe(){
        return $this->belongsTo(Equipe::class);
    }

    public function jogador(){
        return $this->belongsTo(Jogador::class);
    }
}


