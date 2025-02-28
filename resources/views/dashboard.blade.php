<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="text-2xl font-semibold ">Dashboard</h2>
            <a href="{{ route('tasks.index') }}" class="bg-white text-blue-600 px-4 py-2 rounded-lg shadow-md hover:bg-gray-200">
                View Tasks
            </a>
        </div>
    </x-slot>

    <div class="py-12 bg-gray-100 min-h-screen">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-lg rounded-lg p-6">
                <h3 class="text-xl font-bold text-gray-800">Welcome back, {{ Auth::user()->name }}!</h3>
                <p class="text-gray-600 mt-2">You're logged in and ready to manage your tasks efficiently.</p>
                
                <div class="mt-6 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <div class="bg-blue-500  p-6 rounded-lg shadow-md">
                        <h4 class="text-lg font-bold">Total Tasks</h4>
                        <p class="text-2xl font-semibold">{{ $totalTasks }}</p>
                    </div>
                    <div class="bg-green-500  p-6 rounded-lg shadow-md">
                        <h4 class="text-lg font-bold">Completed Tasks</h4>
                        <p class="text-2xl font-semibold">{{ $completedTasks }}</p>
                    </div>
                    <div class="bg-red-500  p-6 rounded-lg shadow-md">
                        <h4 class="text-lg font-bold">Pending Tasks</h4>
                        <p class="text-2xl font-semibold">{{ $pendingTasks }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
