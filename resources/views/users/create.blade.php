<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>myproject</title>
</head>
<body>

<a href="{{ route('user.index')}}">listar</a><br>

    <h2> Produto </h2>

    @if ($errors->any())
        @foreach ($errors->all() as $error)
        <p style="color: #f00;">
            {{ $error }}
</p>
        @endforeach
@endif

<form action="{{ route('user-store') }}" method="POST">
    @csrf
    @method('POST')

    <label>Nome: </label>
    <input type="sting" name="name" placeholder="nome completo" value="{{ old 
    ('name') }}"><br><br>

    <label>Preço: </label>
    <input type="decimal" name="preco" placeholder="nome completo"value="{{ old 
    ('preco') }}"><br><br>

    <label>Descrição: </label>
    <input type="texto" name="descricao" placeholder="nome completo"value="{{ old 
    ('descricao') }}"><br><br>

    <button type=submit>Cadastrar</button>

</form> 

</body>
</html>