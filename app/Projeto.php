<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Projeto extends Model
{
    protected $table = "projeto";

    protected $fillable = ['nome',
        'curso_id',
        'usuario_id',
        'box',
        'turma',
        'integrantes',
        'orientadores',
        'email',
        'arquivo',
        'status'];

    public static function rules()
    {
        return [
            'curso_id' => 'required|integer',
            'usuario_id' => 'required|integer',
            'box' => 'required|integer',
            'turma' => 'required|integer',
            'orientadores' => 'required|min:3|max:255',
            'email' => 'required|min:3|max:255|unique:expoceep_projetos',
            'arquivo' => 'required|min:3|max:255',
        ];
    }

    public static function rulesUpdate()
    {
        return [
            'curso_id' => 'required|integer',
            'usuario_id' => 'required|integer',
            'box' => 'required|integer',
            'turma' => 'required|integer',
            'orientadores' => 'required|min:3|max:255',
            'email' => 'required|min:3|max:255|unique:expoceep_projetos',
            'arquivo' => 'required|min:3|max:255',
        ];
    }

    public function curso()
    {
        return $this->belongsTo('App\Curso', 'curso_id');
    }

    public function user()
    {
        return $this->belongsTo('App\User', 'usuario_id');
        //return $this->belongsTo(User::class);
    }
}
