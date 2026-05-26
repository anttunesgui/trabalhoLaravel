<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Jogador extends Model
{
    protected $fillable = [
        'nome',
        'nacionalidade',
        'posicao',
        'idade'
    ];

    public function contrato(){
        return $this->hasOne(Contrato::class);
    }

    public function estatistica(){
        return $this->hasOne(Estatistica::class);
    }
}
