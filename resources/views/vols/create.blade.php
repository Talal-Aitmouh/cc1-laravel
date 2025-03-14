@extends('layouts.app')
@section('content')
    <div class="max-w-2xl mx-auto">
        <h1 class="text-2xl font-bold text-gray-800 mb-6 flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8" />
            </svg>
            Ajouter un Vol
        </h1>
        
        <div class="bg-white rounded-xl shadow-md p-6 border border-gray-100">
            @if ($errors->any())
                <div class="mb-6 bg-red-50 text-red-700 p-4 rounded-lg">
                    <ul class="list-disc pl-5">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            
            <form action="{{ route('vols.store') }}" method="POST" class="space-y-6">
                @csrf
                
                <div class="space-y-2">
                    <label for="CodeAv" class="block text-sm font-medium text-gray-700">Code Avion</label>
                    <select name="CodeAv" id="CodeAv" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors">
                        @foreach($avions as $avion)
                            <option value="{{ $avion->CodeAv }}">{{ $avion->ModèleAv }}</option>
                        @endforeach
                    </select>
                </div>
                
                <div class="space-y-2">
                    <label for="MatPil" class="block text-sm font-medium text-gray-700">Matricule Pilote</label>
                    <select name="MatPil" id="MatPil" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors">
                        @foreach($pilotes as $pilote)
                            <option value="{{ $pilote->MatPil }}">{{ $pilote->NomPrénomPil }}</option>
                        @endforeach
                    </select>
                </div>
                
                <div class="space-y-2">
                    <label for="DateVol" class="block text-sm font-medium text-gray-700">Date du Vol</label>
                    <input 
                        type="date" 
                        name="DateVol" 
                        id="DateVol" 
                        value="{{ old('DateVol') }}"
                        required
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors"
                    >
                </div>
                
                <div class="space-y-2">
                    <label for="VilleDép" class="block text-sm font-medium text-gray-700">Ville de Départ</label>
                    <input 
                        type="text" 
                        name="VilleDép" 
                        id="VilleDép" 
                        placeholder="Ville Départ" 
                        value="{{ old('VilleDép') }}"
                        required
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors"
                    >
                </div>
                
                <div class="space-y-2">
                    <label for="VilleArr" class="block text-sm font-medium text-gray-700">Ville d'Arrivée</label>
                    <input 
                        type="text" 
                        name="VilleArr" 
                        id="VilleArr" 
                        placeholder="Ville Arrivée" 
                        value="{{ old('VilleArr') }}"
                        required
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors"
                    >
                </div>
                
                <div class="space-y-2">
                    <label for="NbrePass" class="block text-sm font-medium text-gray-700">Nombre de Passagers</label>
                    <input 
                        type="number" 
                        name="NbrePass" 
                        id="NbrePass" 
                        placeholder="Nombre de Passagers" 
                        min="40" 
                        value="{{ old('NbrePass') }}"
                        required
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors"
                    >
                    <p class="text-xs text-gray-500">Minimum: 40 passagers</p>
                </div>
                
                <div class="flex items-center justify-between pt-4">
                    <a href="{{ route('vols.index') }}" class="text-blue-600 hover:text-blue-800 font-medium text-sm transition-colors">
                        Retour à la liste
                    </a>
                    <button 
                        type="submit" 
                        class="px-6 py-2.5 bg-gradient-to-r from-blue-600 to-blue-500 text-white font-medium rounded-lg shadow-md hover:from-blue-700 hover:to-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50 transition-colors"
                    >
                        Ajouter Vol
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection