<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Servico;
use App\Http\Resources\Servico as ServicoResource;

class ServicoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showResource($id){
        return new ServicoResource(Servico::find($id));
    }
    public function index()
    {
        $servicos = Servico::all();

        return $servicos;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $servicos = new Servico;

        $servicos->nome = $request->nome;
        $servicos->tipo = $request->tipo;
        $servicos->preco = $request->preco;

        $servicos->save();
        return $servicos;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $servicos = Servico::find($id);

        return $servicos;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $servicos = Servico::find($id);

        $servicos->nome = $request->nome;
        $servicos->tipo = $request->tipo;
        $servicos->preco = $request->preco;

        $servicos->save();
        return $servicos;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $servicos = Servico::find($id);
        $servicos->delete();

        return 'Serviço deletado com sucesso.';
    }
}
