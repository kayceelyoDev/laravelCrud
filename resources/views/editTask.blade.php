<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
      @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class="max-w-md mx-auto  p-6 bg-white rounded-2xl shadow">
  <h2 class="text-xl font-semibold mb-4">Update Task</h2>


  <form method="POST" action="{{route('TaskUpdate', $task -> id)}}" class="space-y-4">
    <!-- Task Title -->
    @csrf
    @method('PUT')
    <div>
      <label for="TaskTitle" class="block text-sm font-medium text-gray-700">Task Title</label>
      <input
        value="{{old("TaskTitle", $task -> TaskTitle)}}"
        name="TaskTitle"
        type="text"
        placeholder="Enter task name"
        class="mt-1 block p-2 w-full rounded-lg border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200"
      />
    </div>
    <div>
     <input
        value="{{old("Status", $task -> Status)}}"
        name="Status"
        type="text"
        placeholder="Enter Status"
        class="mt-1 block p-2 w-full rounded-lg border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200"
      />
    </div>

    <div>
      <label for="Task" class="block text-sm font-medium text-gray-700">Description</label>
      <textarea
    
        rows="3"
        name="Task"
        placeholder="Write details..."
        class="mt-1  p-2 block w-full rounded-lg border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200"
      >{{old("Task", $task -> Task)}}
    </textarea>
    </div>

    <!-- Submit Button -->
    <div>
      <button
        type="submit"
        class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-400"
      >
        Add Task
      </button>
    </div>
  </form>
</div>

</body>
</html>