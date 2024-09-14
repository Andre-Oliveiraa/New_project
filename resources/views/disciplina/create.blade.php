@extends('layout.window')

@section('title', 'Create Page')

@section('content')
<a href="{{route('home.index')}}">
    <button class="p-2 bg-gray-100 rounded-sm text-gray-500 hover:bg-gray-400 hover:text-zinc-100">Voltar</button>
</a>
<hr>
<form action="{{ route('disciplina.store') }}" method="POST" class="flex flex-col gap-2 w-20">
    @csrf
    <label for="nome">
        NOME:
        <input type="text" required id="nome" name="nome" class="p-1 bg-zinc-300 border border-zinc-900 rounded-sm">
    </label>
    <br>
    <label for="professor">
        PROFESSOR:
        <input type="text" required id="professor" name="professor" class="p-1 bg-zinc-300 border border-zinc-900 rounded-sm">
    </label>
    <br>
    <label for="escola">
        ESCOLA:
        <input type="text" required id="escola" name="escola" class="p-1 bg-zinc-300 border border-zinc-900 rounded-sm">
    </label>
    <br>
    <label for="qnt_aluno">
        QUANTIDADE DE ALUNO:
        <input type="text" required id="qnt_aluno" name="qnt_aluno" class="p-1 bg-zinc-300 border border-zinc-900 rounded-sm">
    </label>
    <br>
    <button class="p-2 bg-zinc-300 border border-zinc-900 rounded-sm min-w-20" type="submit">ENVIAR</button>
</form>
@endsection