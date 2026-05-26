<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Equipe;
use App\Models\Contrato;

class EquipeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $equipes = Equipe::all();
        return view("equipes.index",[
            'equipes' => $equipes,
            'title' => 'Equipes'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('equipes.create', [
            'title'=> 'Adicionar Equipe'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request){
        $equipe = $request->validate(['nome' => 'required|min:4',
                            'pais' => 'required',
                            'ano_fundacao' => 'required|max:4']);
        Equipe::create($equipe);

        return redirect()->route('equipes.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Equipe $equipe){
        return view('equipes.show', [
            'title' => 'Equipe '. $equipe->nome,
            'equipe' => $equipe
        ]);
    }

    public function delete(Equipe $equipe)
    {
        return view('equipes.delete', [
            'equipe' => $equipe,
            'title' => 'Excluir Equipe',
            'text' => 'Deseja Excluir?' 
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Equipe $equipe)
    {

        if ((Contrato::where('equipe_id', $equipe->id)->exists())){
            return redirect()->route('equipes.index')
                             ->with('mensagemErro', 'Não possível Excluir esta Equipe pois ela está incluido em um Contrato');
        }else{
            $equipe->delete();
            return redirect()->route('equipes.index')
                             ->with('mensagemSucesso', 'Equipe excluída com sucesso');

        }
    }
}
