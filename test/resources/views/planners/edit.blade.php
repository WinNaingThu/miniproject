@extends('layouts.app')

@section('title', 'Edit Task')

@section('content')
<div class="max-w-xl mx-auto bg-white p-6 rounded-2xl shadow-sm border border-gray-100">
    <h3 class="text-lg font-bold text-gray-950 mb-6">📝 Edit Task</h3>
    
    <form action="{{ route('planners.update', $planner->id) }}" method="POST" class="space-y-4">
        @csrf
        
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Task Title</label>
            <input type="text" name="title" value="{{ $planner->title }}" class="w-full px-4 py-2 border border-gray-200 rounded-xl focus:ring-2 focus:ring-blue-500 focus:outline-none" required>
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Description</label>
            <textarea name="description" rows="3" class="w-full px-4 py-2 border border-gray-200 rounded-xl focus:ring-2 focus:ring-blue-500 focus:outline-none">{{ $planner->description }}</textarea>
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Task Date</label>
            <input type="date" name="task_date" value="{{ $planner->task_date }}" class="w-full px-4 py-2 border border-gray-200 rounded-xl focus:ring-2 focus:ring-blue-500 focus:outline-none" required>
        </div>

        <div class="flex space-x-3 pt-2">
            <button type="submit" class="flex-1 bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 rounded-xl transition-colors">Update Task</button>
            <a href="{{ route('planners.index') }}" class="flex-1 bg-gray-100 hover:bg-gray-200 text-gray-700 font-medium py-2 rounded-xl text-center transition-colors">Cancel</a>
        </div>
    </form>
</div>
@endsection