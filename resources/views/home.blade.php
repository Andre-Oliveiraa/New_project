@extends('layout.window')

@section('title', 'Home Page')

@section('content')
    <p class="text-gray-500">Home Page</p>
    <div class="flex flex-row gap-2">
        <div class="flex flex-col gap-2">
            <a href="{{ route('aluno.index') }}">
                <button class="p-2 bg-gray-100 rounded-sm text-gray-500 hover:bg-gray-400 hover:text-zinc-100">Listar de Alunos</button>
            </a>
            <hr>
            <a href="{{ route('aluno.create') }}">
                <button class="p-2 bg-gray-100 rounded-sm text-gray-500 hover:bg-gray-400 hover:text-zinc-100">Cadastrar Aluno</button>
            </a>
        </div>
        <div class="flex flex-col gap-2">
            <a href="{{ route('disciplina.index') }}">
                <button class="p-2 bg-gray-100 rounded-sm text-gray-500 hover:bg-gray-400 hover:text-zinc-100">Listar de Disciplinas</button>
            </a>
            <hr>
            <a href="{{ route('disciplina.create') }}">
                <button class="p-2 bg-gray-100 rounded-sm text-gray-500 hover:bg-gray-400 hover:text-zinc-100">Cadastrar Disciplina</button>
            </a>
        </div>
    </div>
@endsection
