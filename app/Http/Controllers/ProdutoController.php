<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Produto;
use App\Models\Categoria;

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produtos = Produto::orderBy('nome')->get();
        return view('produto.index', ['produtos' => $produtos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categorias = Categoria::orderBy('nome', 'ASC')->pluck('nome', 'id');
        return view('produto.create', ['categorias' => $categorias]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $validated = $request->validate([
            'categoria_id'  => 'required',
            'nome'          => 'required|min:5',
            'quantidade'    => 'required|integer',
            'valor'         => 'required',
        ]);

        $produto = new Produto;
        $produto->categoria_id  = $request->categoria_id;
        $produto->nome          = $request->nome;
        $produto->quantidade    = $request->quantidade;
        $produto->valor         = $request->valor;
        $produto->save();

        return redirect('/produto')->with('status', 'Produto criado com sucesso');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $produto = Produto::find($id);
        return view('produto.show', ['produto' => $produto]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $produto = Produto::find($id);
        $categorias = Categoria::orderBy('nome', 'ASC')->pluck('nome', 'id');
        return view('produto.edit', ['produto' => $produto, 'categorias' => $categorias]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'categoria_id'  => 'required',
            'nome'       => 'required|min:5',
            'quantidade' => 'required|integer',
            'valor'      => 'required',
        ]);

        $produto = Produto::find($id);
        $produto->categoria_id  = $request->categoria_id;
        $produto->nome          = $request->nome;
        $produto->quantidade    = $request->quantidade;
        $produto->valor         = $request->valor;
        $produto->save();
        
        return redirect('/produto')->with('status', 'Produto atualizado com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $produto = Produto::find($id);
        $produto ->delete();
        return redirect('/produto')->with('status', 'Produto excluido com sucesso');
    }
}
