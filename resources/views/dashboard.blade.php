@extends('layouts.app')
@section('content')
    <h1 class="text-3xl font-bold mb-8 text-gray-800">Dashboard</h1>
    
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="bg-white rounded-2xl shadow-xl overflow-hidden transition-transform hover:scale-105 duration-300">
            <div class="p-6 text-black text-center">
                <div class="flex items-center justify-center mb-3">
                <img src="https://cdn-icons-png.flaticon.com/512/5787/5787874.png" class="w-12 h-12 mr-4" alt="">

                    <h2 class="text-xl font-semibold">Total Avions</h2>
                </div>
                <p class="text-4xl font-bold mt-2">{{ $totalAvions }}</p>
            </div>
            <div class="bg-gray-100 px-6 py-3">
                <a href="{{ route('avions.index') }}" class="text-blue-600 hover:text-blue-800 text-sm font-medium flex items-center justify-center">
                    Voir tous les avions
                    <img src="https://cdn-icons-png.flaticon.com/512/5787/5787874.png" class="w-4 h-4 ml-1" alt="">
                </a>
            </div>
        </div>
        
        <div class="bg-white rounded-2xl shadow-xl overflow-hidden transition-transform hover:scale-105 duration-300">
            <div class="p-6 text-black text-center">
                <div class="flex items-center justify-center mb-3">
                <img src="https://cdn-icons-png.flaticon.com/512/48/48870.png" class="w-12 h-12 mr-4" alt="">

                    <h2 class="text-xl font-semibold">Total Pilotes</h2>
                </div>
                <p class="text-4xl font-bold mt-2">{{ $totalPilotes }}</p>
            </div>
            <div class="bg-gray-100 px-6 py-3">
                <a href="{{ route('pilotes.index') }}" class="text-green-600 hover:text-green-800 text-sm font-medium flex items-center justify-center">
                    Voir tous les pilotes
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </a>
            </div>
        </div>
        
        <div class="bg-white rounded-2xl shadow-xl overflow-hidden transition-transform hover:scale-105 duration-300">
            <div class="p-6 text-black text-center">
                <div class="flex items-center justify-center mb-3">
                <img src="https://cdn-icons-png.flaticon.com/512/181/181701.png" class="w-12 h-12 mr-4" alt="">

                    <h2 class="text-xl font-semibold">Total Vols</h2>
                </div>
                <p class="text-4xl font-bold mt-2">{{ $totalVols }}</p>
            </div>
            <div class="bg-gray-100 px-6 py-3">
                <a href="{{ route('vols.index') }}" class="text-red-600 hover:text-red-800 text-sm font-medium flex items-center justify-center">
                    Voir tous les vols
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </a>
            </div>
        </div>
    </div>
@endsection