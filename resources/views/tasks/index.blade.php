<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tasks</title>
</head>
<body>
    <h1 class="text-2xl font-bold mb-4">All Tasks</h1>
    <a href="{{ route('tasks.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded">Create Task</a>

    <ul class="mt-4">
        @foreach ($tasks as $task)
            <li class="border p-4 my-2">
                <a href="{{ route('tasks.show', $task) }}" class="text-xl font-semibold">{{ $task->title }}</a>
                <p class="text-sm text-gray-600">Deadline: {{ \\Carbon\\Carbon::parse($task->deadline)->format('F j, Y') }}</p>
            </li>
        @endforeach
    </ul>
</body>
</html>