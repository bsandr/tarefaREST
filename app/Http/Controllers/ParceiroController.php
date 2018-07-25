<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Parceiro;
use App\Http\Resources\Parceiro as ParceiroResource;

class ParceiroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showResource($id)
    {
        return new ParceiroResource(Parceiro::find($id));
    }

    public function index()
    {
        $parceiros = Parceiro::all();
        return $parceiros;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $parceiros = new Parceiro;

        $parceiros->nome = $request->nome;
        $parceiros->email = $request->email;
        $parceiros->capital = $request->capital;

        $parceiros->save();
        return $parceiros;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $parceiros = Parceiro::find($id);
        return $parceiros;
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
        $parceiros = Parceiro::find($id);

        $parceiros->nome = $request->nome;
        $parceiros->email = $request->email;
        $parceiros->capital = $request->capital;

        $parceiros->save();
        return $parceiros;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $parceiros = Parceiro::find($id);

        $parceiros->delete();
        return 'Parceiro deletado com sucesso.';
    }
}
