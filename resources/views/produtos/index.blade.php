<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/produto/index.css') }}">
</head>
<body>
    <div class="list-container">
        <h2>Lista de Produtos</h2>
        <table class="product-table">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Preço</th>
                    <th>Descrição</th>
                    <th class="actions">Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($produtos as $produto)
                    <tr>
                        <td>{{ $produto->nome }}</td>
                        <td>R$ {{ number_format($produto->preco, 2, ',', '.') }}</td>
                        <td>{{ $produto->descricao }}</td>
                        <td class="actions">
                            <a href="{{ route('produtos.edit', $produto->id) }}" class="btn-edit" style="display: inline-block; padding: 5px 10px; background-color: #ffc107; color: #fff; text-decoration: none; border-radius: 4px; margin-right: 10px;">Editar</a>
                            <form action="{{ route('produtos.delete', $produto->id) }}" method="POST" class="inline-form" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn-delete" onclick="return confirm('Tem certeza que deseja excluir?')" style="padding: 5px 10px; background-color: #dc3545; color: #fff; border: none; border-radius: 4px; cursor: pointer;">Excluir</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="btn-wrapper">
            <a href="{{ route('produtos.create') }}" class="btn-primary">+ Novo Produto</a>
        </div>
    </div>
</body>
</html>
