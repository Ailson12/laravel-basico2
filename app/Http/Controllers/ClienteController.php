<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;  //isso é o modelo.
class ClienteController extends Controller
{
    public function index() {
        $clientes = Cliente::all();
        return view('cliente.index', compact('clientes'));
    }
    public function create() {
        return view('cliente.form'); 
    }
    public function store(Request $request)
    {
        //dd($requeste->all());
        try{
        Cliente::create($request->all());
        flash('Cliente Salvo Com Sucesso')->success();
        } catch (\Exception $erro) {
            flash('Ocorreu um erro ao salvar')->error();
            return redirect()->back();
        }
        return redirect('/clientes'); //iso é um redirecionamento!!
    }
    public function edit($id)
    {
        $cliente = Cliente::find($id); //find vai procurar por esse id
        return view('cliente.form', compact('cliente'));
    }
    public function update(Request $request, $id) {
                $cliente = Cliente::find($id);
                $cliente->update($request->all());
                return redirect('/clientes'); 
    }
    public function destroy($id) 
    {
        $cliente = Cliente::find($id);
        flash("Cliente " . $cliente->nome . " excluido Com Sucesso")->success();
        $cliente->delete();
        return redirect('/clientes');
    }
}
