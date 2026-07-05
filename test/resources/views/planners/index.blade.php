@extends('layouts.app')

@section('title', 'All Tasks - Daily Planner')

@section('content')
<div class="max-w-3xl mx-auto">
    <h2 class="text-xl font-bold mb-6 text-gray-950">Your Planned Tasks</h2>

    <div class="space-y-4">
        @forelse($planners as $planner)
            <div class="bg-white p-5 rounded-2xl shadow-sm border border-gray-100 flex items-center justify-between">
                <div>
                    <div class="flex items-center space-x-2">
                        <span class="h-2 w-2 rounded-full {{ $planner->status == 'Completed' ? 'bg-green-500' : 'bg-amber-500' }}"></span>
                        <h3 class="text-lg font-semibold {{ $planner->status == 'Completed' ? 'line-through text-gray-400' : 'text-gray-900' }}">
                            {{ $planner->title }}
                        </h3>
                    </div>
                    <p class="text-gray-600 text-sm mt-1">{{ $planner->description }}</p>
                    <span class="inline-block mt-2 text-xs bg-gray-100 text-gray-500 px-2 py-1 rounded-md">
                        📅 {{ $planner->task_date }}
                    </span>
                </div>

                <div class="flex items-center space-x-2">
                    @if($planner->status != 'Completed')
                        <a href="{{ route('planners.complete', $planner->id) }}" class="text-xs bg-green-50 hover:bg-green-100 text-green-600 font-medium px-3 py-1.5 rounded-lg border border-green-200">
                            Complete
                        </a>
                    @endif
                    <a href="{{ route('planners.edit', $planner->id) }}" class="text-xs bg-gray-50 hover:bg-gray-100 text-gray-600 font-medium px-3 py-1.5 rounded-lg border border-gray-200">
                        Edit
                    </a>
                    <a href="{{ route('planners.delete', $planner->id) }}" onclick="return confirm('Are you sure?')" class="text-xs bg-red-50 hover:bg-red-100 text-red-600 font-medium px-3 py-1.5 rounded-lg border border-red-200">
                        Delete
                    </a>
                </div>
            </div>
        @empty
            <div class="text-center py-12 bg-white rounded-2xl border border-gray-100 shadow-sm">
                <span class="text-4xl">🎉</span>
                <p class="text-gray-500 mt-2">No tasks planned. Click "Add New Task" to start!</p>
            </div>
        @endforelse
    </div>
</div>
@endsection