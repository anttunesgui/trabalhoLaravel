<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Estatistica extends Model
{
    protected $fillable = [
        'jogador_id',
        'gols',
        'jogos',
        'assistencias'
    ];

    protected function jogador(){
        return $this->belongsTo(Jogador::class);
    }
}
