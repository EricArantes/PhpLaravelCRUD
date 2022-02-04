<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Usuario</title>
    <style>
        label{
            float: left;
            display: block;
            width: 90px;
        }
        </style>
</head>
<body>
    <form action="{{ route('atualizar_usuario', ['id' => $usuario->id]) }}" method="post">
        @csrf
            <div><label for="Nome">Nome</label>
            <input type="text" name="Nome" id="Nome" value="{{ $usuario->Nome }}"></div>

            <div><label for="Sobrenome">Sobrenome</label>
            <input type="text" name="Sobrenome" id="Sobrenome" value="{{ $usuario->Sobrenome }}"></div>

            <div><label for="DataDeNascimento">Nascimento</label>
            <input type="text" name="DataDeNascimento" id="DataDeNascimento" value="{{ $usuario->DataDeNascimento }}"></div>

            <div><label for="Naturalidade">Naturalidade</label>
            <input type="text" name="Naturalidade" id="Naturalidade" value="{{ $usuario->Naturalidade }}"></div>

            <div><label for="Hobby">Hobby</label>
            <input type="text" name="Hobby" id="Hobby" value="{{ $usuario->Hobby }}"></div>

            <button type="submit">Salvar</button>
    </form>
</body>
</html>