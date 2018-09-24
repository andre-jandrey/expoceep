<?php

namespace App\Http\Controllers;

/* use Illuminate\Http\File;*/

use App\Projeto;

class AdminController extends Controller
{
    public function index()
    {
        $projetos = Projeto::orderBy('sala', 'ASC')->orderBy('box', 'ASC')->get();
        // $projetos = Projeto::all()->sortBy(["box", "sala"]);
        // $projetos = DB::table('projeto')->orderBy('sala', 'desc')->get();

        //dd($projetos);
        //return response()->json($projeto);
        return view('admin.home', compact('projetos'));
    }

    public function relEtiquetas()
    {
        $projetos = Projeto::orderBy('sala', 'ASC')->orderBy('box', 'ASC')->get();
        // $projetos = Projeto::all()->sortBy(["box", "sala"]);
        // $projetos = DB::table('projeto')->orderBy('sala', 'desc')->get();

        //dd($projetos);
        //return response()->json($projeto);
        return view('admin.etiqueta', compact('projetos'));
    }
}
