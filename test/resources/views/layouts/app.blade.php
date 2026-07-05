<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Daily Planner App')</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 text-gray-800 font-sans">

    <header class="bg-white shadow-sm border-b border-gray-200 sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4">
            <div class="flex items-center justify-between">
                
                <div class="flex items-center space-x-3">
                    <span class="text-2xl">📅</span>
                    <h1 class="text-xl font-bold tracking-tight text-gray-950">My Daily Planner</h1>
                </div>

                <div>
                    <a href="{{ route('planners.create') }}" class="inline-flex items-center justify-center space-x-2 bg-blue-600 hover:bg-blue-700 text-white text-sm font-medium px-4 py-2 rounded-xl shadow-sm transition-all duration-200 active:scale-95">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4 h-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                        </svg>
                        <span>Add New Task</span>
                    </a>
                </div>

            </div>
        </div>
    </header>

    <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-6"> 
        @if(session('success'))
            <div class="mb-4 p-4 bg-green-100 border border-green-200 text-green-700 rounded-xl">
                {{ session('success') }}
            </div>
        @endif

        @yield('content')
    </div>
    
</body>
</html>