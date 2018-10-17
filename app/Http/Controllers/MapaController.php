<?php

namespace App\Http\Controllers;

use App\Projeto;
use Illuminate\Support\Facades\DB;

class MapaController extends Controller
{
    public function showMapa()
    {
        return view('mapa.mapa-geral');
    }

    public function showBloco()
    {
        $curso_id = session('projeto_idcurso');
        switch ($curso_id) {
            case 1:return view('mapa.mapa-bloco1');
                break;
            case 2:return view('mapa.mapa-bloco2');
                break;
            case 3:return view('mapa.mapa-bloco3');
                break;
            case 4:return view('mapa.mapa-bloco3');
                break;
            case 5:return view('mapa.mapa-bloco5');
                break;
            case 6:return view('mapa.mapa-bloco6');
                break;
            case 7:return view('mapa.mapa-bloco7');
                break;
            case 8:return view('mapa.mapa-bloco8');
                break;
            case 9:return view('mapa.mapa-bloco9');
                break;
            default:return "<h1>ERRO 404 - Página não encontrada</h1>";
        }
    }

    public function showBlocoCurso($projeto_id)
    {
        session(['projeto_id' => $projeto_id]);

        $projeto = Projeto::find($projeto_id);

        switch ($projeto->curso_id) {
            case 1:return view('mapa.mapa-bloco1');
                break;
            case 2:return view('mapa.mapa-bloco2');
                break;
            case 3:return view('mapa.mapa-bloco3');
                break;
            case 4:return view('mapa.mapa-bloco3');
                break;
            case 5:return view('mapa.mapa-bloco5');
                break;
            case 6:return view('mapa.mapa-bloco6');
                break;
            case 7:return view('mapa.mapa-bloco7');
                break;
            case 8:return view('mapa.mapa-bloco8');
                break;
            case 9:return view('mapa.mapa-bloco9');
                break;
            default:return "<h1>ERRO 404 - Página não encontrada</h1>";
        }
    }

    public function showSala($id)
    {
        session(['projeto_sala' => $id]);
        $projeto_id = session('projeto_id');
        $box_ocupado = DB::table('projeto')->where('sala', '=', $id)->get();
        $boxes = array();
        foreach ($box_ocupado as $box) {
            $boxes[] = $box->box;
        }

        switch ($id) {
            case 1001:return view('mapa.mapa-lab-enfermagem', compact('projeto_id', 'boxes'));
            case 1002:return view('mapa.mapa-saguao-meio-ambiente', compact('projeto_id', 'boxes'));
            case 1003:return view('mapa.mapa-saguao-seguranca', compact('projeto_id', 'boxes'));
/*case 1001: return view('mapa.mapa-lab-enfermagem', compact('projeto_id', 'boxes'));
case 1001: return view('mapa.mapa-lab-enfermagem', compact('projeto_id', 'boxes'));
case 1001: return view('mapa.mapa-lab-enfermagem', compact('projeto_id', 'boxes')); */
            default:return view('mapa.mapa-sala', compact('projeto_id', 'boxes'));
        }

    }

}
