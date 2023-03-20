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

     /**
     * @OA\Get(
     *     tags={"/projetos"},
     *     summary="Get a list of projetos",
     *     description="Get a list of projetos",
     *     path="/api/projetos",
     *     @OA\Parameter(
     *          name="Limit",
     *          in="query",
     *          description="Limit per page",
     *          @OA\Schema(type="init"),
     *          style="form"
     *      ),
     *      @OA\Response(
*               response="200", description="List of projetos"
     *      )
     * )
     */

     /**
      * @OA\Server(url= "http://localhost:8000/api/documentation"),
      */

     /**
     * @OA\Info(
     *      version="1.0.0",
     *      title="API Documentation",
     *      description="Description of Projetos API",
     *      @OA\Contact(
     *          email="webdantas@gmail.com",
     *          name="Eduardo Dantas Correia"
     *      ),
     *      @OA\License(
     *          name="MIT",
     *          url="https://opensource.org/licenses/MIT"
     *      )
     * )
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

    /**
     * Retrieve a project by ID.
     *
     * @OA\Get(
     *     tags={"/projetos"},
     *     path="/api/projetos/{id}",
     *     summary="Retrieve a project by ID",
     *     @OA\Parameter(
     *         name="id",
     *         description="Project ID",
     *         required=true,
     *         in="path",
     *         @OA\Schema(
     *             type="integer"
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Successful operation"
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Project not found"
     *     )
     * )
     */
    public function show(AppModelsProjeto $appModelsProjeto, $id_projeto)
    {

        // Busca o projeto pelo id
        $projeto = $appModelsProjeto->find($id_projeto);

        // Verifica se o projeto foi encontrado
        if (!$projeto) {
            return response()->json(['message' => 'Projeto não encontrado'], 404);
        }else{
            // Retorna o arquivo na resposta da API
            return response()->json($projeto);
        }
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
