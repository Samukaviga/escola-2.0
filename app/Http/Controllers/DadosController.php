<?php

namespace App\Http\Controllers;

use App\Models\Alunos;
use App\Models\Turmas;
use Illuminate\Http\Request;

class DadosController extends Controller
{
    

    public function index(Alunos $alunos, Turmas $turmas) {

        $aluno = $alunos::all();
        $turma = $turmas::all();

        return view('dados.index')->with('alunos', $aluno)
                                    ->with('turmas', $turma);
    }

}
