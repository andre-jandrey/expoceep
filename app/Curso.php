<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    protected $table = "curso";
    protected $fillable = ['nome'];

    public static function rules() {
        return [
            'nome' => 'required|min:3|max:255'
        ];
    }

    public static function rulesUpdate($id = '') {
        return [
            'nome' => 'min:3|max:255'
        ];
    }
}
