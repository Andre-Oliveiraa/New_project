<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Aluno;

class AlunoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $Alunos = Aluno::all();
        return view('aluno.index', compact('Alunos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('aluno.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request -> validate ([
            'nome'      => 'required',
            'idade'     => 'required',
            'sexo'      => 'required',
            'cpf'       => 'required',
            'rg'        => 'required',
            'email'     => 'required',
            'senha'     => 'required'
        ]);

        Aluno::create($request->all());
        return redirect()->route('aluno.index')->with('success', 'Aluno Cadsatrado');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
