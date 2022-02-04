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
    <form action="{{ route('salvar_usuario') }}" method="post">
        @csrf
            <div><label for="Nome">Nome</label><input type="text" name="Nome" id="Nome"></div>
            <div><label for="Sobrenome">Sobrenome</label><input type="text" name="Sobrenome" id="Sobrenome"></div>
            <div><label for="DataDeNascimento">Nascimento</label><input type="text" name="DataDeNascimento" id="DataDeNascimento"></div>
            <div><label for="Naturalidade">Naturalidade</label><input type="text" name="Naturalidade" id="Naturalidade"></div>
            <div><label for="Hobby">Hobby</label><input type="text" name="Hobby" id="Hobby"></div>
            <button type="submit">Salvar</button>

            <div><a href="{{ route('mostrar_usuarios') }}">Ver Usuarios</a></div>
    </form>
</body>
</html>