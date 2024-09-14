@extends('layout.window')

@section('title', 'Index Page')

@section('content')
    <a href="{{ route('home.index') }}">
        <button class="p-2 bg-gray-100 rounded-sm text-gray-500 hover:bg-gray-400 hover:text-zinc-100">Voltar</button>
    </a>
    <hr>
    <p>Aluno Page</p>
    <table class="min-w-full bg-white">
        <thead class='bg-gray-100'>
            <tr>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Id</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nome</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Idade</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Sexo</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">CPF</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">RG</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Email</th>
            </tr>
        </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @foreach ($Alunos as $Aluno)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $Aluno->id }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $Aluno->nome }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $Aluno->idade }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $Aluno->sexo }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $Aluno->cpf }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $Aluno->rg }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $Aluno->email }}</td>
                    </tr>
                @endforeach
            </tbody>
    </table>
@endsection
