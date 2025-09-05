<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css','resources/js/main.js'])

     <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body>
    <div class="border flex items-center gap-4 justify-center h-screen">
        <div class="border w-80 h-80 flex items-center justify-center">
                1
        </div>

        <div class="border w-80 h-80  flex items-center justify-center">
                2
        </div>


        <div class="border hidden  w-80 h-80  sm:flex items-center justify-center">
                3
        </div>


        <div class="border hidden  md:flex w-80 h-80   items-center justify-center">
                4
        </div>
    </div>
</body>
</html>