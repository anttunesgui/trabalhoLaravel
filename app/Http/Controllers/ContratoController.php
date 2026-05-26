<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contrato;
use App\Models\Jogador;
use App\Models\Equipe;

class ContratoController extends Controller
{
    
    /**
     * Show the form for creating a new resource.
     */
    public function create(jogador $jogador)
    {
        $equipes = Equipe::all();
        return view('contratos.create', 
                   ['jogador'=> $jogador,
                    'equipes' => $equipes,
                    'title' => 'Cadastrar Contrato']);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $contrato = $request->validate(['inicio' => 'required',
                            'fim' => 'required',
                            'salario' => 'required',
                            'equipe_id' => 'required',
                            'jogador_id' => 'required']);
        Contrato::create($contrato);

        return redirect()->route('jogadores.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(jogador $jogador){
        $contrato = $jogador->contrato;
        return view('contratos.show', 
                   ['contrato' => $contrato,
                    'jogador' => $jogador,
                    'title' => "Contrato Jogador"]);
    }

    /**
     * Delete the specified resource in storage.
     */
    public function delete(Contrato $contrato){
       return view('contratos.delete',
                  ['contrato' => $contrato,
                   'title' => 'Excluir Contrato',
                   'text' => 'Deseja Excluir?']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contrato $contrato)
    {
        $contrato->delete();
        
        return redirect()->route('jogadores.index');
    }
}
