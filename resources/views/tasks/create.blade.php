<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tasks - Create</title>
</head>
<body>
    <h1 class="text-2xl font-bold mb-4">Create Task</h1>

    <form action="{{ route('tasks.store') }}" method="POST" class="space-y-4">
        @csrf

        <div>
            <label for="title" class="block font-medium">Title</label>
            <input type="text" name="title" id="title" class="border rounded w-full p-2" required>
        </div>

        <div>
            <label for="description" class="block font-medium">Description</label>
            <textarea name="description" id="description" class="border rounded w-full p-2" rows="4"></textarea>
        </div>

        <div>
            <label for="deadline" class="block font-medium">Deadline</label>
            <input type="date" name="deadline" id="deadline" class="border rounded w-full p-2">
        </div>

        <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded">Save Task</button>
    </form>
</body>
</html>