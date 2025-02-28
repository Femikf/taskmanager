<!DOCTYPE html>
<html>
<head>
    <title>Task Completed</title>
</head>
<body>
    <h2>Hello {{ $task->user->name }},</h2>
    <p>Your task "<strong>{{ $task->title }}</strong>" has been marked as completed.</p>
    <p>Due Date: {{ $task->due_date }}</p>
    <p>Thank you for using our task management system.</p>
</body>
</html>
