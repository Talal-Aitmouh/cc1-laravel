@extends('layouts.app')
@section('content')
    <div class="flex justify-between items-center mb-4">
        <h1 class="text-3xl font-bold">Liste des Vols</h1>
        <a href="{{ route('vols.create') }}" class="bg-green-500 text-white px-4 py-2 rounded-lg shadow-md hover:bg-green-600">Ajouter un Vol</a>
    </div>
    <table class="w-full bg-white shadow-md rounded-lg overflow-hidden">
        <thead class="bg-gray-300">
            <tr>
                <th class="p-3 text-left">Numéro</th>
                <th class="p-3 text-left">Avion</th>
                <th class="p-3 text-left">Pilote</th>
                <th class="p-3 text-left">Date</th>
                <th class="p-3 text-left">Départ</th>
                <th class="p-3 text-left">Arrivée</th>
                <th class="p-3 text-left">Passagers</th>
                <th class="p-3 text-center">Statut</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($vols as $vol)
                <tr class="border-b hover:bg-gray-100">
                    <td class="p-3">{{ $vol->NumVol }}</td>
                    <td class="p-3">{{ $vol->avion->ModèleAv }}</td>
                    <td class="p-3">{{ $vol->pilote->NomPrénomPil }}</td>
                    <td class="p-3">{{ $vol->DateVol }}</td>
                    <td class="p-3">{{ $vol->VilleDép }}</td>
                    <td class="p-3">{{ $vol->VilleArr }}</td>
                    <td class="p-3">{{ $vol->NbrePass }}</td>
                    <td class="p-3 text-center">{{ $vol->VolRéalisé ? '✅' : '❌' }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection