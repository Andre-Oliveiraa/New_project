@extends('layout.window')

@section('title', 'Index Page')

@section('content')
    <a href="{{ route('home.index') }}">
        <button class="p-2 bg-gray-100 rounded-sm text-gray-500 hover:bg-gray-400 hover:text-zinc-100">Voltar</button>
    </a>
    <hr>
    <p>Disciplana Page</p>
    <table class="min-w-full bg-white">
        <thead class='bg-gray-100'>
            <tr>    
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Id</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nome</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Professor</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Escola</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Quantidade de Aluno</th>
            </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
            @foreach ($Disciplinas as $Disciplina)
                <tr>
                <td class="px-6 py-4 whitespace-nowrap">{{ $Disciplina->id }}</td>
                <td class="px-6 py-4 whitespace-nowrap">{{ $Disciplina->nome }}</td>
                <td class="px-6 py-4 whitespace-nowrap">{{ $Disciplina->professor }}</td>
                <td class="px-6 py-4 whitespace-nowrap">{{ $Disciplina->escola }}</td>
                <td class="px-6 py-4 whitespace-nowrap">{{ $Disciplina->qnt_aluno }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
