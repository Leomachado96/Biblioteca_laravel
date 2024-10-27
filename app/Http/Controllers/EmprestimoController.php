<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aluno;
use App\Models\Emprestimo;
use App\Models\Livro;

class EmprestimoController extends Controller
{
    public function index(){
        $emprestimos = Emprestimo::with('aluno', 'livro')->get();
        return view('emprestimos.index', compact('emprestimos'));
    }

    public function create() {
        $alunos = Aluno::all();
        $livros = Livro::all();
        return view('emprestimos.create', compact('alunos', 'livros'));
    }

    public function store(Request $request){
        $request->validate([
            'aluno_id' => 'required|exists:alunos,id',
            'livro_id' => 'required|exists:livros,id',
            'data_emprestimo' => 'required|date',
        ]);
        return redirect()->route('emprestimos.index')->with('success', 'Livro emprestado com sucesso');
    }

    public function devolver(Emprestimo $emprestimo){
        $emprestimo->update(['data_devolucao' => now()]);
        return redirect()->route('empretimos.index')->with('success', 'Livro devolvido com sucesso');
    }
}