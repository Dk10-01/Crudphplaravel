<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Produto</title>
</head>
<body style="font-family: Arial, sans-serif; background-color: #f4f4f9; margin: 0; padding: 0; display: flex; justify-content: center; align-items: center; min-height: 100vh;">
    <div style="background-color: #fff; padding: 20px; border-radius: 8px; box-shadow: 0 4px 8px rgba(0,0,0,0.1); width: 100%; max-width: 500px;">
        <h1 style="text-align: center; color: #333; margin-bottom: 20px;">Criar Novo Produto</h1>

        @if ($errors->any())
            <div style="background-color: #f8d7da; color: #721c24; padding: 10px; border-radius: 4px; margin-bottom: 20px;">
                <ul style="margin: 0; padding-left: 20px;">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('produtos.store') }}" method="POST" style="display: flex; flex-direction: column; gap: 15px;">
            @csrf
            <div>
                <label for="nome" style="display: block; margin-bottom: 5px; color: #333;">Nome</label>
                <input type="text" name="nome" id="nome" value="{{ old('nome') }}" style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 4px; font-size: 16px;" required>
            </div>

            <div>
                <label for="preco" style="display: block; margin-bottom: 5px; color: #333;">Preço</label>
                <input type="number" name="preco" id="preco" value="{{ old('preco') }}" step="0.01" style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 4px; font-size: 16px;" required>
            </div>

            <div>
                <label for="descricao" style="display: block; margin-bottom: 5px; color: #333;">Descrição</label>
                <textarea name="descricao" id="descricao" style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 4px; font-size: 16px; resize: vertical; min-height: 100px;">{{ old('descricao') }}</textarea>
            </div>

            <button type="submit" style="background-color: #28a745; color: #fff; padding: 10px; border: none; border-radius: 4px; font-size: 16px; cursor: pointer; transition: background-color 0.3s;">
                Criar Produto
            </button>
        </form>
    </div>
</body>
</html>
