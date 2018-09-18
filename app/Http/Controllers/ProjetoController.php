<?php

namespace App\Http\Controllers;

use App\Curso;
use App\Http\Requests\ProjetoRequest;
/* use Illuminate\Http\File;*/
use App\Projeto;
use Illuminate\Support\Facades\Auth;

class ProjetoController extends Controller
{
    public function index()
    {
        $projeto = Projeto::where('usuario_id', '=', Auth::id())->get();
        //return response()->json($projeto);
        return view('projeto.home', compact('projeto'));
    }

    public function show($id)
    {
        $projeto = projeto::find($id);
        if (empty($projeto)) {
            return '<div class="alert alert-danger">Erro: objeto não encontrado</div>';
        }
        //return response()->json($projeto);
        return view('projeto.show', compact('projeto'));
    }

    public function update(ProjetoRequest $request, $id)
    {
        $request->validate([
            'arquivo' => 'max:5120', //5MB
        ]);

        $path = $request->arquivo->store('arquivos');
        //$url = Storage::url($path);
        $dados = $request->all();

        $projeto = projeto::find($id);
        $dados["usuario_id"] = Auth::user()->id;
        $dados["arquivo"] = $path;
        $projeto->update($dados);

        return redirect()->action('ProjetoController@index')->withInput($request->only('nome'));
    }

    public function sucesso()
    {
        return view('projeto.success');
    }

    public function congratulations()
    {
        return view('projeto.congratulations');
    }

    public function setBox($id, $box)
    {
        $projeto = projeto::find($id);

        $projeto->box = $box;
        $projeto->sala = session('projeto_sala');

        $projeto->save();

        return redirect()->action('ProjetoController@congratulations');
    }

    public function getBoxOcupado($sala)
    {
        $box = DB::table('projeto')->where('sala', '=', $sala)->get();

        return $box();
    }

    public function store(ProjetoRequest $request)
    {
        $request->validate([
            'arquivo' => 'max:5120', //5MB
        ]);

        $path = $request->arquivo->store('arquivos');
        //$url = Storage::url($path);
        $dados = $request->all();

        $dados["usuario_id"] = Auth::user()->id;
        $dados["arquivo"] = $path;

        $projeto = projeto::create($dados);

        // Store a piece of data in the session...
        session(['projeto_id' => $projeto->id]);
        session(['projeto_idcurso' => $projeto->curso_id]);
        //return response()->json($projeto);
        return redirect()->action('ProjetoController@sucesso');
    }

    public function destroy($id)
    {
        $projeto = projeto::find($id);
        $projeto->delete();
        //return response()->json($projeto);
        return redirect()->action('ProjetoController@index');
    }

    public function create()
    {
        $cursos = Curso::all();
        return view('projeto.create-edit', compact('cursos'));
    }

    public function edit($id)
    {
        $cursos = Curso::all();
        $projeto = projeto::find($id);
        if (empty($projeto)) {
            return '<div class="alert alert-danger">Erro: objeto não encontrado</div>';
        }
        //return response()->json($projeto);
        return view('projeto.create-edit', compact('projeto', 'cursos'));
    }
}
