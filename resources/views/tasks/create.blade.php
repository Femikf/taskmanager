<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Task') }}
        </h2>
    </x-slot>


    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
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
                <h3 class="text-lg font-semibold text-gray-700 mb-4">Create New Task</h3>
                
                <form action="{{ route('tasks.store') }}" method="POST">
                    @csrf

                    <!-- Title -->
                    <div class="mb-4">
                        <label class="block text-gray-700 font-medium">Title</label>
                        <input type="text" name="title" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring focus:border-blue-500" required>
                    </div>

                    <!-- Description -->
                    <div class="mb-4">
                        <label class="block text-gray-700 font-medium">Description</label>
                        <textarea name="description" rows="4" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring focus:border-blue-500" required></textarea>
                    </div>

                    <!-- Due Date -->
                    <div class="mb-4">
                        <label class="block text-gray-700 font-medium">Due Date</label>
                        <input type="date" name="due_date" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring focus:border-blue-500" required>
                    </div>

                    <!-- Status Dropdown -->
                    <div class="mb-4">
                        <label class="block text-gray-700 font-medium">Status</label>
                        <select name="status" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring focus:border-blue-500" required>
                            <option value="Pending">Pending</option>
                            <option value="In Progress">In Progress</option>
                            <option value="Completed">Completed</option>
                        </select>
                    </div>

                    <!-- Submit Button -->
                    <div class="flex justify-end">
                        <button type="submit" class="bg-green-500 hover:bg-green-700 font-bold py-2 px-4 rounded">
                            Create Task
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
