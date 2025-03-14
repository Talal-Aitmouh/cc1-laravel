@extends('layouts.app')
@section('content')
    <div class="flex justify-between items-center mb-4">
        <h1 class="text-3xl font-bold">Liste des Avions</h1>
        <a href="{{ route('avions.create') }}" class="bg-green-500 text-white px-4 py-2 rounded-lg shadow-md hover:bg-green-600">Ajouter un Avion</a>
    </div>
    <table class="w-full bg-white shadow-md rounded-lg overflow-hidden">
        <thead class="bg-gray-300">
            <tr>
                <th class="p-3 text-left">Code</th>
                <th class="p-3 text-left">Modèle</th>
                <th class="p-3 text-left">Capacité</th>
                <th class="p-3 text-center">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($avions as $avion)
                <tr class="border-b hover:bg-gray-100">
                    <td class="p-3">{{ $avion->CodeAv }}</td>
                    <td class="p-3">{{ $avion->ModèleAv }}</td>
                    <td class="p-3">{{ $avion->CapacitéAv }}</td>
                    <td class="p-3 text-center">
                        <a href="{{ route('avions.edit', $avion->CodeAv) }}" class="bg-yellow-500 text-white px-3 py-1 rounded-lg hover:bg-yellow-600">Modifier</a>
                        <form action="{{ route('avions.destroy', $avion->CodeAv) }}" method="POST" class="inline-block">
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