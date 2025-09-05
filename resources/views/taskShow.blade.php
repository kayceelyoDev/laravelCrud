<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
          @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Document</title>
</head>
<body>
    <div class="max-w-2xl mx-auto mt-6">
        <div class="">
            <h1 class="text-2xl font-bold mb-5">TASK LIST</h1>
        </div>
        <div class="">
            <form action="{{route('logout')}}" method="POST">
                @csrf
                 <button class="bg-red-500 p-2 text-white font-bold rounded">Logout</button>
            </form>
           
        </div>
        @foreach ($taskList as $tasks)
        <div class="flex items-center justify-between bg-white p-4 rounded-lg shadow mb-3">
            <div>
                <h2 class="text-lg font-semibold text-gray-800">{{$tasks->TaskTitle}}</h2>
                <p class="text-gray-600 text-sm">{{$tasks->Task}}</p>
               
            </div>
            <div class="flex space-x-2">
                <a href="{{route('taskEdit', $tasks->id)}}" 
                   class="px-3 py-1 bg-blue-500 text-white text-sm rounded hover:bg-blue-600">
                    Edit
                </a>
                <form action="{{route('TaskDelete', $tasks->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" 
                        class="px-3 py-1 bg-red-500 text-white text-sm rounded hover:bg-red-600">
                        Delete
                    </button>
                </form>
            </div>
        </div>
        @endforeach
       
  
</div>

</body>
</html>