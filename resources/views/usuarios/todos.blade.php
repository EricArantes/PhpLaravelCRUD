<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuarios</title>
</head>
    <body>
        <table>
            <tr><th>Nome</th><th>Sobrenome</th><th>Nascimento</th><th>Naturalidade</th><th>Hobby</th></tr>

            @foreach($usuarios as $usuario)
                <tr>
                    <td>{{$usuario -> Nome}}</td>
                    <td>{{$usuario -> Sobrenome}}</td>
                    <td>{{$usuario -> DataDeNascimento}}</td>
                    <td>{{$usuario -> Naturalidade}}</td>
                    <td>{{$usuario -> Hobby}}</td>
                    <td><a href="{{ route('editar_usuario', ['id' =>$usuario->id])}}" 
                                title="Editar usuario {{ $usuario->Nome }}">Editar</a></td>
                                
                    <td><a href="{{ route('excluir_usuario', ['id' =>$usuario->id])}}" 
                                title="Excluir usuario {{ $usuario->Nome }}">Excluir</a></td>

                    <td><a href="{{ route('retornar_json', ['id' =>$usuario->id])}}" 
                                title="Retornar Json do Usuario {{ $usuario->Nome }}">Mostrar Json</a></td>
                </tr>
            @endforeach

            <div><a href="{{ route('novo_cadastro') }}">Novo Cadastro</a></div>


    
    </body>
</html>