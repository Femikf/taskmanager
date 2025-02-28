<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">

    <div class="max-w-4xl w-full bg-white shadow-lg rounded-lg p-8">
        <!-- Header Section -->
        <header class="flex justify-between items-center border-b pb-4">
            <h1 class="text-2xl font-bold text-blue-600">Welcome to Task Manager</h1>
            @if (Route::has('login'))
                <nav class="flex items-center gap-4">
                    @auth
                        <a href="{{ url('/dashboard') }}"
                           class="px-5 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition">
                            Dashboard
                        </a>
                    @else
                        <a href="{{ route('login') }}"
                           class="px-5 py-2 border border-gray-300 rounded-md hover:bg-gray-200 transition">
                            Log in
                        </a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}"
                               class="px-5 py-2 border border-blue-600 text-blue-600 rounded-md hover:bg-blue-600 hover:text-white transition">
                                Register
                            </a>
                        @endif
                    @endauth
                </nav>
            @endif
        </header>

        <!-- Content Section -->
        <div class="mt-6 text-gray-700">
            <p class="text-lg">Manage your tasks efficiently with our powerful Task Manager.</p>
            <p class="mt-2">Track your progress, complete tasks on time, and stay organized.</p>
        </div>

        <!-- Footer -->
        <footer class="mt-6">
            <p class="text-sm text-gray-500">&copy; 2025 Task Manager. All rights reserved.</p>
        </footer>
    </div>

</body>
</html>
