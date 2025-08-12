<?php

namespace App\Http\Controllers;
use App\Models\Produto; // Importe o modelo Produto
use App\Requests\UserRequest;

class Usercontroller extends Controller
{
   public function index()
{

    return view('users.index');
}


public function create()
{
 return view('users.create');
}

public function store(UserRequest $request)
{
$request->validated();

User::create([
   'name' => $request->name,

]);

return redirect()->route('user.index')->with('success','Usuário
cadastrado com sucesso!');

}



}
