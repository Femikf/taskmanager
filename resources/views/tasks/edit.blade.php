<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Task') }}
        </h2>
    </x-slot>


    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <!-- alerts -->
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            @if (session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="bg-white p-6 shadow sm:rounded-lg">
                <h3 class="text-lg font-semibold text-gray-700 mb-4">Edit Task</h3>
                
                <form action="{{ route('tasks.update', $task->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <!-- Title -->
                    <div class="mb-4">
                        <label class="block text-gray-700 font-medium">Title</label>
                        <input type="text" name="title" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring focus:border-blue-500" value="{{ $task->title }}" required>
                    </div>

                    <!-- Description -->
                    <div class="mb-4">
                        <label class="block text-gray-700 font-medium">Description</label>
                        <textarea name="description" rows="4" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring focus:border-blue-500" required>{{ $task->description }}</textarea>
                    </div>

                    <!-- Due Date -->
                    <div class="mb-4">
                        <label class="block text-gray-700 font-medium">Due Date</label>
                        <input type="date" name="due_date" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring focus:border-blue-500" value="{{ $task->due_date }}" required>
                    </div>

                    <!-- Status Dropdown -->
                    <div class="mb-4">
                        <label class="block text-gray-700 font-medium">Status</label>
                        <select name="status" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring focus:border-blue-500" required>
                            <option value="Pending" {{ $task->status == 'Pending' ? 'selected' : '' }}>Pending</option>
                            <option value="In Progress" {{ $task->status == 'In Progress' ? 'selected' : '' }}>In Progress</option>
                            <option value="Completed" {{ $task->status == 'Completed' ? 'selected' : '' }}>Completed</option>
                        </select>
                    </div>

                    <!-- Submit Button -->
                    <div class="flex justify-end">
                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 font-bold py-2 px-4 rounded">
                            Update Task
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
