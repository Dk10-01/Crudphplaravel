<?php

namespace App\Http\Controllers;

use App\Models\Produto; // Importe o modelo Produto
use App\Http\Requests\ProdutoRequest;

class ProdutoController extends Controller
{
   public function index(){

    $produtos = Produto::all();
    \Log::info('Fetched all products', ['count' => $produtos->count()]);
    return view('produtos.index', compact('produtos'));
}


public function create(){
 return view('produtos.create');
}

public function edit(Produto $produto){
    return view('produtos.edit', compact('produto'));
}

public function update(ProdutoRequest $request, Produto $produto){
    $request->validated();
    \Log::info('Updating product', $request->all());
    $produto->update([
        'nome' => $request->nome,
        'preco'=> $request->preco,
        'descricao'=> $request->descricao,
    ]);
    return redirect()->route('produtos.index')->with('success','Produto atualizado com sucesso!');
}

public function store(ProdutoRequest $request){
$request->validated();
    \Log::info('Creating new product', $request->all());

Produto::create([
   'nome' => $request->nome,
   'preco'=> $request->preco,
   'descricao'=> $request->descricao,
]);

return redirect()->route('produtos.index')->with('success','Produto criado com sucesso!');
}

public function delete(Produto $produto){
    $produto->delete();
    return redirect()->route('produtos.index')->with('success','Produto excluido com sucesso!');
}
}
