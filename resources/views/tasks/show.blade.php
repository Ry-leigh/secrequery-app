<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $task->title }}</title>
</head>
<body>
    <h1 class="text-2xl font-bold mb-2">{{ $task->title }}</h1>

    <p class="mb-2"><strong>Description:</strong> {{ $task->description }}</p>
    <p class="mb-4 text-gray-600"><strong>Deadline:</strong> {{ \Carbon\Carbon::parse($task->deadline)->format('F j, Y') }}</p>

    <a href="{{ route('tasks.edit', $task) }}" class="bg-yellow-500 text-white px-4 py-2 rounded">Edit</a>

    <form action="{{ route('tasks.destroy', $task) }}" method="POST" class="inline-block ml-2">
        @csrf
        @method('DELETE')
        <button type="submit" onclick="return confirm('Are you sure?')" class="bg-red-600 text-white px-4 py-2 rounded">Delete</button>
    </form>

    <br><br>
    <a href="{{ route('tasks.index') }}" class="text-blue-500">Back to All Tasks</a>
</body>
</html>