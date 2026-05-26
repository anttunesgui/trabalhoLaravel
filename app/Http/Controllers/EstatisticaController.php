<?php

namespace App\Http\Controllers;

use App\Models\Estatistica;
use Illuminate\Http\Request;
use App\Models\Jogador;

class EstatisticaController extends Controller
{

    /**
     * Show the form for creating a new resource.
     */
    public function create(jogador $jogador)
    {
        return view('estatisticas.create', 
                   ['jogador' => $jogador,
                    'title' => 'Incluir Estatística']);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request){

        Estatistica::create($request->all());

        $jogador = Jogador::find($request->jogador_id);

        return redirect()->route('estatisticas.show', $jogador);
    }
    /**
     * Display the specified resource.
     */
    public function show(jogador $jogador)
    {
        $estatistica = $jogador->estatistica;
        return view('estatisticas.show',
                   ['estatistica' => $estatistica,
                    'jogador' => $jogador,
                    'title' => "Estatística Jogador"]);
    }

    /**
     * Delete the specified resource in storage.
     */
    public function delete(Estatistica $estatistica)
    {
        return view ('estatisticas.delete',
                    ['estatistica' => $estatistica,
                     'title' => 'Excluir Estatística',
                     'text' => 'Deseja Excluir?']);  
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Estatistica $estatistica){
        $estatistica->delete();    

        return redirect()->route('jogadores.index');
    }
}
