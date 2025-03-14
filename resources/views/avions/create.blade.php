@extends('layouts.app')
@section('content')
    <div class="max-w-2xl mx-auto">
        <h1 class="text-2xl font-bold text-gray-800 mb-6 flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8" />
            </svg>
            Ajouter un Avion
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
            
            <form action="{{ route('avions.store') }}" method="POST" class="space-y-6">
                @csrf
                
                <div class="space-y-2">
                    <label for="CodeAv" class="block text-sm font-medium text-gray-700">Code Avion</label>
                    <input 
                        type="text" 
                        name="CodeAv" 
                        id="CodeAv" 
                        placeholder="ex: AV001" 
                        value="{{ old('CodeAv') }}"
                        required
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors"
                    >
                </div>
                
                <div class="space-y-2">
                    <label for="ModèleAv" class="block text-sm font-medium text-gray-700">Modèle</label>
                    <input 
                        type="text" 
                        name="ModèleAv" 
                        id="ModèleAv" 
                        placeholder="ex: Boeing 737" 
                        value="{{ old('ModèleAv') }}"
                        required
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors"
                    >
                </div>
                
                <div class="space-y-2">
                    <label for="CapacitéAv" class="block text-sm font-medium text-gray-700">Capacité</label>
                    <input 
                        type="number" 
                        name="CapacitéAv" 
                        id="CapacitéAv" 
                        placeholder="ex: 150" 
                        min="50" 
                        value="{{ old('CapacitéAv') }}"
                        required
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors"
                    >
                    <p class="text-xs text-gray-500">Minimum: 50 passagers</p>
                </div>
                
                <div class="flex items-center justify-between pt-4">
                    <a href="{{ route('avions.index') }}" class="text-blue-600 hover:text-blue-800 font-medium text-sm transition-colors">
                        Retour à la liste
                    </a>
                    <button 
                        type="submit" 
                        class="px-6 py-2.5 bg-gradient-to-r from-blue-600 to-blue-500 text-white font-medium rounded-lg shadow-md hover:from-blue-700 hover:to-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50 transition-colors"
                    >
                        Ajouter l'avion
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection