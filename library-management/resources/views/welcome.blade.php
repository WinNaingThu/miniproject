<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Library Admin') }}</title>

    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <style>
            /*! tailwindcss v4.0.7 | MIT License | https://tailwindcss.com */ 
            /* ... သင်ပေးပို့ထားသော အပေါ်က CSS Style ကြီးတစ်ခုလုံးကို ဤနေရာတွင် ထားရှိပါသည် ... */
            body {
                font-family: 'Instrument Sans', ui-sans-serif, system-ui, sans-serif;
                background-color: #f4f6f9;
                margin: 0;
                padding: 0;
            }
        </style>
    @endif
</head>
<body class="antialiased bg-[#fdfdfc] text-[#1b1b18] min-h-screen flex flex-col">

    <nav class="bg-[#1b1b18] text-white p-4 shadow-md">
        <div class="max-w-6xl mx-auto flex justify-between items-center px-4">
            <a href="#" class="text-lg font-semibold tracking-wider uppercase">📚 Library Dashboard</a>
            <div class="flex gap-4">
                <a href="{{ route('books.index') }}" class="text-sm font-medium text-gray-300 hover:text-white transition">Books List</a>
                <a href="{{ route('books.create') }}" class="text-sm font-medium text-gray-300 hover:text-white transition">+ Add Data</a>
            </div>
        </div>
    </nav>

    <main class="flex-1 max-w-6xl w-full mx-auto p-6 md:py-12">
        
        @if(session('success'))
            <div class="mb-6 p-4 bg-green-100 border border-green-400 text-green-700 rounded-md shadow-sm">
                {{ session('success') }}
            </div>
        @endif

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:mt-10">
            
            <div class="bg-white p-6 rounded-md shadow-sm border border-[#e3e3e0]">
                <h2 class="text-lg font-semibold mb-4 text-gray-800 border-b border-gray-200 pb-2">Manage Category</h2>
                
                {{-- ဤနေရာတွင် Category Form သို့မဟုတ် အချက်အလက်များ လှမ်းထည့်နိုင်သည် --}}
                <p class="text-sm text-[#706f6c]">Welcome to the category administration. Use this panel to update or create tags.</p>
            </div>

            <div class="bg-white p-6 rounded-md shadow-sm border border-[#e3e3e0]">
                <h2 class="text-lg font-semibold mb-4 text-gray-800 border-b border-gray-200 pb-2">Manage Books</h2>
                
                {{-- ဤနေရာတွင် Book Form သို့မဟုတ် ဇယားများ လှမ်းထည့်နိုင်သည် --}}
                <p class="text-sm text-[#706f6c]">Welcome to the book collection warehouse. Update prices, titles, and authors smoothly.</p>
            </div>

        </div>
    </main>

    <footer class="bg-gray-100 border-t border-[#e3e3e0] text-center py-4 text-xs text-[#706f6c] mt-auto">
        &copy; {{ date('Y') }} Library Management System. All rights reserved.
    </footer>

</body>
</html>