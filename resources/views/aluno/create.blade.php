@extends('layout.window')

@section('title', 'Create Page')

@section('content')
<a href="{{route('home.index')}}">
    <button class="p-2 bg-gray-100 rounded-sm text-gray-500 hover:bg-gray-400 hover:text-zinc-100">Voltar</button>
</a>
<hr>
<form action="{{ route('aluno.store') }}" method="POST" class="flex flex-col gap-2 w-20">
    @csrf
    <label for="nome">
        NOME:
        <input type="text" required id="nome" name="nome" class="p-1 bg-zinc-300 border border-zinc-900 rounded-sm">
    </label>
    <br>
    <label for="idade">
        IDADE:
        <input type="number" required id="idade" name="idade" class="p-1 bg-zinc-300 border border-zinc-900 rounded-sm">
    </label>
    <br>
    <label for="sexo">
        SEXO:
        <input type="text" required id="sexo" name="sexo" class="p-1 bg-zinc-300 border border-zinc-900 rounded-sm">
    </label>
    <br>
    <label for="cpf">
        CPF:
        <input type="text" required id="cpf" name="cpf" class="p-1 bg-zinc-300 border border-zinc-900 rounded-sm">
    </label>
    <br>
    <label for="rg">
        RG:
        <input type="text" required id="rg" name="rg" class="p-1 bg-zinc-300 border border-zinc-900 rounded-sm">
    </label>
    <br>
    <label for="email">
        EMAIL:
        <input type="email" required id="email" name="email" class="p-1 bg-zinc-300 border border-zinc-900 rounded-sm">
    </label>
    <br>
    <label for="senha">
        SENHAR:
        <input type="password" required id="senha" name="senha" class="p-1 bg-zinc-300 border border-zinc-900 rounded-sm">
    </label>
    <br>
    <button class="p-2 bg-zinc-300 border border-zinc-900 rounded-sm min-w-20" type="submit">ENVIAR</button>
</form>
@endsection
