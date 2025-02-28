<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Management System - README</title>
</head>
<body>
    <h1>Task Management System</h1>

    <h2>Overview</h2>
    <p>This is a simple <strong>Task Management System</strong> built using Laravel. It allows users to register, log in, and manage tasks with features like creating, editing, deleting, filtering, and email notifications upon task completion.</p>

    <h2>Features</h2>

    <h3>1. User Authentication</h3>
    <ul>
        <li>User registration, login, and logout.</li>
        <li>Uses Laravel's built-in authentication (Laravel Breeze).</li>
    </ul>

    <h3>2. Task Management</h3>
    <ul>
        <li>Authenticated users can:</li>
        <ul>
            <li>Create tasks (Title, Description, Status, Due Date).</li>
            <li>View all tasks in a tabular format.</li>
            <li>Edit or delete tasks.</li>
            <li>Filter tasks by status (Pending, In Progress, Completed).</li>
        </ul>
    </ul>

    <h3>3. API Endpoints (Using Laravel Sanctum for Authentication)</h3>
    <ul>
        <li><strong>Get all tasks:</strong> GET /api/tasks</li>
        <li><strong>Create a new task:</strong> POST /api/tasks</li>
        <li><strong>Update a task:</strong> PUT /api/tasks/{id}</li>
        <li><strong>Delete a task:</strong> DELETE /api/tasks/{id}</li>
    </ul>

    <h3>4. Validations</h3>
    <ul>
        <li>Task title should not exceed 255 characters.</li>
        <li>Due date should be in the future.</li>
    </ul>

    <h3>5. UI</h3>
    <ul>
        <li>Uses Laravel Blade templates.</li>
        <li>Tasks are displayed in a tabular format with actions for editing and deleting.</li>
    </ul>

    <h3>6. Email Notifications</h3>
    <ul>
        <li>Sends an email notification when a task is marked as <strong>Completed</strong>.</li>
    </ul>

    <h2>Installation Guide</h2>

    <h3>Prerequisites</h3>
    <ul>
        <li>PHP 8.1+</li>
        <li>Composer</li>
        <li>MySQL / SQLite / PostgreSQL (Any database supported by Laravel)</li>
        <li>Node.js & NPM (For frontend dependencies, optional)</li>
    </ul>

    <h3>Steps to Install</h3>
    <ol>
        <li><strong>Clone the Repository:</strong></li>
        <pre><code>git clone https://github.com/Femikf/taskmanager.git
cd task-management</code></pre>

        <li><strong>Install Dependencies:</strong></li>
        <pre><code>composer install
npm install</code></pre>

        <li><strong>Set Up Environment:</strong></li>
        <p>Copy <code>.env.example</code> to <code>.env</code> and configure database details.</p>
        <pre><code>cp .env.example .env</code></pre>

        <p>Generate the application key:</p>
        <pre><code>php artisan key:generate</code></pre>

        <li><strong>Run Migrations & Seed Database:</strong></li>
        <pre><code>php artisan migrate --seed</code></pre>

        <li><strong>Install & Configure Sanctum:</strong></li>
        <pre><code>php artisan vendor:publish --provider="Laravel\Sanctum\SanctumServiceProvider"
php artisan migrate</code></pre>

        <li><strong>Run the Application:</strong></li>
        <pre><code>php artisan serve</code></pre>
        <p>Open the application at <code>http://127.0.0.1:8000</code></p>
    </ol>

    <h2>API Authentication (For API Users)</h2>
    <p>Use Laravel Sanctum for API authentication.</p>
    <p>After login, include <code>Authorization: Bearer &lt;your-token&gt;</code> in API requests.</p>

    <h2>Running Tests</h2>
    <p>Run feature and unit tests using:</p>
    <pre><code>php artisan test</code></pre>

    <h2>Deployment</h2>
    <ol>
        <li>Set up a web server (Apache/Nginx).</li>
        <li>Configure the database in the <code>.env</code> file.</li>
        <li>Run <code>php artisan migrate --force</code>.</li>
        <li>Set up cron jobs if required.</li>
    </ol>

    <h2>License</h2>
    <p>This project is licensed under the MIT License.</p>
</body>
</html>
