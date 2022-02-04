<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class UsuariosController extends Controller
{
    public function create(){
        return view('usuarios.create');
    }
    public function store(Request $request){
        Usuario::create([
            'Nome' => $request->Nome,
            'Sobrenome' => $request->Sobrenome,
            'DataDeNascimento' => $request->DataDeNascimento,
            'Naturalidade' => $request->Naturalidade,
            'Hobby' => $request->Hobby,
        ]);

        return view('usuarios.conclusao');
    }
    public function show(){
        $usuarios = Usuario::all();
        return view('usuarios.todos', ['usuarios' => $usuarios]);
    }
    public function destroy($id){
        $usuario=Usuario::findOrFail($id);
        $usuario->delete();
        return view('usuarios.conclusao');
    }
    public function edit($id){
        $usuario=Usuario::findOrFail($id);
        return view('usuarios.editar', ['usuario' => $usuario]);
    }
    public function update(Request $request, $id){
        $usuario=Usuario::findOrFail($id);
        $usuario->update([
            'Nome' => $request->Nome,
            'Sobrenome' => $request->Sobrenome,
            'DataDeNascimento' => $request->DataDeNascimento,
            'Naturalidade' => $request->Naturalidade,
            'Hobby' => $request->Hobby,
        ]);

        return view('usuarios.conclusao');

    }
    public function returnJson($id){
        $usuario=Usuario::findOrFail($id);

        header('Content-Type: application/json');
        echo json_encode($usuario);

    }
}
