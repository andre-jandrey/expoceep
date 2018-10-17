<?php

namespace App\Http\Controllers;

/* use Illuminate\Http\File;*/

use App\Projeto;
use App\User;

class AdminController extends Controller
{
    public function __construct()
    {

    }
    public function index()
    {
        $projetos = Projeto::with('curso')->where('status', '!=', 'aprovado')->orderBy('sala', 'ASC')->orderBy('box', 'ASC')->get();
        // dd($projetos);
        return view('admin.home', compact('projetos'));
    }

    public function projetos()
    {
        $projetos = Projeto::with('curso')->orderBy('sala', 'ASC')->orderBy('box', 'ASC')->get();
        // dd($projetos);
        return view('admin.projetos', compact('projetos'));
    }

    public function usuarios()
    {
        $usuarios = User::all();
        //dd($usuarios);
        return view('admin.usuarios', compact('usuarios'));
    }

    public function relEtiquetas()
    {
        $projetos = Projeto::where('status', '=', 'aprovado')->orderBy('sala', 'ASC')->orderBy('box', 'ASC')->get();
        // $projetos = Projeto::all()->sortBy(["box", "sala"]);
        // $projetos = DB::table('projeto')->orderBy('sala', 'desc')->get();

        //dd($projetos);
        //return response()->json($projeto);
        return view('admin.etiqueta', compact('projetos'));
    }

    public function relProjetosPendentes()
    {
        $projetos = Projeto::where('status', '=', 'aprovado')->orderBy('sala', 'ASC')->orderBy('box', 'ASC')->get();
        // $projetos = Projeto::all()->sortBy(["box", "sala"]);
        // $projetos = DB::table('projeto')->orderBy('sala', 'desc')->get();

        //dd($projetos);
        //return response()->json($projeto);
        return view('admin.etiqueta', compact('projetos'));
    }

    public function aprovar($id)
    {
        $projeto = Projeto::find($id);

        $data = array();
        $data['status'] = 'aprovado';
        $projeto->update($data);
        return redirect()->action('AdminController@index');
    }

    public function reprovar($id)
    {
        $projeto = Projeto::find($id);

        $data = array();
        $data['status'] = 'reprovado';
        $projeto->update($data);

        return redirect()->action('AdminController@index');
    }
}
