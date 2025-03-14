@extends('layouts.app')
@section('content')
    <div class="flex justify-between items-center mb-4">
        <h1 class="text-3xl font-bold">Liste des Pilotes</h1>
        <!-- <a href="{{ route('pilotes.create') }}" class="bg-green-500 text-white px-4 py-2 rounded-lg shadow-md hover:bg-green-600">Ajouter un Pilote</a> -->
    </div>
    <table class="w-full bg-white shadow-md rounded-lg overflow-hidden">
        <thead class="bg-gray-300">
            <tr>
                <th class="p-3 text-left">Matricule</th>
                <th class="p-3 text-left">Nom</th>
                <th class="p-3 text-left">Adresse</th>
                <th class="p-3 text-left">Téléphone</th>
                <th class="p-3 text-center">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pilotes as $pilote)
                <tr class="border-b hover:bg-gray-100">
                    <td class="p-3">{{ $pilote->MatPil }}</td>
                    <td class="p-3">{{ $pilote->NomPrénomPil }}</td>
                    <td class="p-3">{{ $pilote->AdressePil }}</td>
                    <td class="p-3">{{ $pilote->TelPil }}</td>
                    <td class="p-3 text-center">
                        <a href="{{ route('pilotes.edit', $pilote->MatPil) }}" class="bg-yellow-500 text-white px-3 py-1 rounded-lg hover:bg-yellow-600">Modifier</a>
                        <form action="{{ route('pilotes.destroy', $pilote->MatPil) }}" method="POST" class="inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-500 text-white px-3 py-1 rounded-lg hover:bg-red-600">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection