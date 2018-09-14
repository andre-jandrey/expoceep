<?php

namespace App\Http\Controllers;

use App\Http\Requests\CursoRequest;
use App\Curso;

class CursoController extends Controller
{
    public function index(){
        $cursos = Curso::all();
        //return response()->json($Curso);
        return view('curso.home', compact('cursos'));
    }

    public function show($id){
        $curso = Curso::find($id);
        if(empty($Curso)) {
            return '<div class="alert alert-danger">Erro: objeto não encontrado</div>';
        }
        //return response()->json($Curso);
        return view('curso.show', compact('curso'));
    }

    public function update(CursoRequest $request, $id){
        $curso = Curso::find($id);
        $curso ->update($request->all());
        // return response()->json($Curso);
        return redirect()->action('CursoController@index')->withInput($request->only('nome'));
    }


    public function store(CursoRequest $request){
        $curso = Curso::create($request->all());
        //return response()->json($Curso);
        return redirect()->action('CursoController@index')->withInput($request->only('nome'));
    }

    public function destroy($id){
        $curso = Curso::find($id);
        $curso ->delete();
        //return response()->json($Curso);
        return redirect()->action('CursoController@index');
    }

    public function create(){
        return view('curso.create-edit');
    }

    public function edit($id){
        $curso = Curso::find($id);
        if(empty($curso)) {
            return '<div class="alert alert-danger">Erro: objeto não encontrado</div>';
        }
        //return response()->json($Curso);
        return view('curso.create-edit', compact('curso'));
    }
}
