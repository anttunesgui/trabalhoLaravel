<?php

namespace App\Http\Controllers;

use App\Models\Jogador;
use Illuminate\Http\Request;
use App\Models\Contrato;

class JogadorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jogadores = Jogador::all();
        return view ("jogadores.index", [
                     'jogadores' => $jogadores,
                     'title' => 'Jogadores'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('jogadores.create', [
            'title' => 'Cadastrar Jogador'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $jogador = $request->validate(['nome' => 'required|min:4',
                           'nacionalidade' => 'required',
                           'posicao' => 'required',
                           'idade' => 'required']);
        Jogador::create($jogador);
        return redirect()->route('jogadores.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Jogador $jogador){
        return view ('jogadores.show', 
                    ['jogador' => $jogador,
                     'title' => "Jogador:  $jogador->nome"]);
    }

    /**
     * Delete the specified resource in storage.
     */
    public function delete(Jogador $jogador){
        return view ('jogadores.delete', 
                     ['jogador' => $jogador,
                      'title' => 'Excluir Jogador',
                      'text' => 'Deseja Excluir?']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Jogador $jogador){

        if (($jogador->contrato->exists())){
            return redirect()->route('jogadores.index')
                             ->with('mensagemErro', 'Não possível Excluir este jogador pois ele está incluido em um Contrato');
        }else{
            $jogador->delete();
            return redirect()->route('jogadores.index')
                             ->with('mensagemSucesso', 'Jogador Excluído com sucesso');
        }
    }
}
