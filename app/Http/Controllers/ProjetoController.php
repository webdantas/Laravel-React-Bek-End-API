<?php

namespace App\Http\Controllers;

use App\Models\AppModelsProjeto;
use Illuminate\Http\Request;

class ProjetoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projetos = AppModelsProjeto::all();

            return response()->json($projetos);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AppModelsProjeto  $appModelsProjeto
     * @return \Illuminate\Http\Response
     */
    public function show(AppModelsProjeto $appModelsProjeto, $id_projeto)
    {

        // Busca o projeto pelo id
        $projeto = $appModelsProjeto->find($id_projeto);
        DD($projeto);

        // Verifica se o projeto foi encontrado
        if (!$projeto) {
            return response()->json(['message' => 'Projeto não encontrado'], 404);
        }

        // Define o caminho para o arquivo unitário
        $caminhoArquivo = public_path('arquivos_unitarios/' . $projeto->id_projeto . '.pdf');

        // Verifica se o arquivo existe
        if (!file_exists($caminhoArquivo)) {
            return response()->json(['message' => 'Arquivo não encontrado'], 404);
        }

        // Retorna o arquivo na resposta da API
        return response()->file($caminhoArquivo);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AppModelsProjeto  $appModelsProjeto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AppModelsProjeto $appModelsProjeto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AppModelsProjeto  $appModelsProjeto
     * @return \Illuminate\Http\Response
     */
    public function destroy(AppModelsProjeto $appModelsProjeto)
    {
        //
    }
}
