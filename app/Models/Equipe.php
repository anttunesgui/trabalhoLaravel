<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Equipe extends Model{
    protected $fillable = [
        'nome',
        'pais',
        'ano_fundacao'
    ];

    public function contratos(){
        return $this->hasMany(Contrato::class);
    }
}
