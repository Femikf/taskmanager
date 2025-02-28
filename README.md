# Task Management System

## Overview
This is a simple **Task Management System** built using Laravel. It allows users to register, log in, and manage tasks with features like creating, editing, deleting, filtering, and email notifications upon task completion.

## Features

### 1. User Authentication
- User registration, login, and logout.
- Uses Laravel's built-in authentication (Laravel Breeze).

### 2. Task Management
Authenticated users can:
- Create tasks (Title, Description, Status, Due Date).
- View all tasks in a tabular format.
- Edit or delete tasks.
- Filter tasks by status (Pending, In Progress, Completed).

### 3. API Endpoints (Using Laravel Sanctum for Authentication)
- **Get all tasks:** `GET /api/tasks`
- **Create a new task:** `POST /api/tasks`
- **Update a task:** `PUT /api/tasks/{id}`
- **Delete a task:** `DELETE /api/tasks/{id}`

### 4. Validations
- Task title should not exceed 255 characters.
- Due date should be in the future.

### 5. UI
- Uses Laravel Blade templates.
- Tasks are displayed in a tabular format with actions for editing and deleting.

### 6. Email Notifications
- Sends an email notification when a task is marked as **Completed**.

## Installation Guide

### Prerequisites
- PHP 8.1+
- Composer
- MySQL / SQLite / PostgreSQL (Any database supported by Laravel)
- Node.js & NPM (For frontend dependencies, optional)

### Steps to Install
1. **Clone the Repository:**

    ```bash
    git clone https://github.com/Femikf/taskmanager.git
    cd task-management
    ```

2. **Install Dependencies:**

    ```bash
    composer install
    npm install
    ```

3. **Set Up Environment:**
    Copy `.env.example` to `.env` and configure database details.

    ```bash
    cp .env.example .env
    ```

    Generate the application key:

    ```bash
    php artisan key:generate
    ```

4. **Run Migrations & Seed Database:**

    ```bash
    php artisan migrate --seed
    ```

5. **Install & Configure Sanctum:**

    ```bash
    php artisan vendor:publish --provider="Laravel\Sanctum\SanctumServiceProvider"
    php artisan migrate
    ```

6. **Run the Application:**

    ```bash
    php artisan serve
    ```

    Open the application at `http://127.0.0.1:8000`

## API Authentication (For API Users)
Use Laravel Sanctum for API authentication.

After login, include `Authorization: Bearer <your-token>` in API requests.

## Running Tests
Run feature and unit tests using:

```bash
php artisan test
