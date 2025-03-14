<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Apex')</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 min-h-screen font-sans ">
    <nav class="bg-white py-5 px-32 text-black shadow-lg">
        <div class="container mx-auto flex justify-between items-center">
            <a href="/" class="text-2xl font-extrabold tracking-tight">Apex</a>
            <div class="space-x-6">
                <a href="{{ route('avions.index') }}" class="hover:text-blue-100 transition duration-200 font-medium">Avions</a>
                <a href="{{ route('pilotes.index') }}" class="hover:text-blue-100 transition duration-200 font-medium">Pilotes</a>
                <a href="{{ route('vols.index') }}" class="hover:text-blue-100 transition duration-200 font-medium">Vols</a>
            </div>
        </div>
    </nav>
    <div class="container mx-auto mt-10 p-6 bg-white shadow-xl rounded-xl max-w-7xl">
        @yield('content')
    </div>
</body>
</html>