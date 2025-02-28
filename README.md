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
