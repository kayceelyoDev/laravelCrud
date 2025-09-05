<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Laravel App</title>
      @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center p-4">
    <div class="w-full max-w-md bg-white rounded-lg shadow-md overflow-hidden">
        <div class="px-6 py-4">
            <div class="flex justify-center mb-6">
                <h2 class="text-2xl font-bold text-gray-800">Create Account</h2>
            </div>
            
            <form method="POST" action="{{route('regAcc')}}">
                @csrf
                
                <!-- Name Input -->
                <div class="mb-4">
                    <label for="name" class="block text-gray-700 text-sm font-medium mb-2">Full Name</label>
                    <input id="name" type="text" 
                        class="w-full px-3 py-2 border  rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 @error('name') border-red-500 @enderror" 
                        name="name" value="{{ old('name') }}" required autocomplete="name" autofocus
                        placeholder="Enter your full name">
                    
                    @error('name')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                
                <!-- Email Input -->
                <div class="mb-4">
                    <label for="email" class="block text-gray-700 text-sm font-medium mb-2">Email Address</label>
                    <input id="email" type="email" 
                        class="w-full px-3 py-2 border  rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 @error('email') border-red-500 @enderror" 
                        name="email" value="{{ old('email') }}" required autocomplete="email"
                        placeholder="Enter your email">
                    
                    @error('email')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                
                <!-- Password Input -->
                <div class="mb-4">
                    <label for="password" class="block text-gray-700 text-sm font-medium mb-2">Password</label>
                    <input id="password" type="password" 
                        class="w-full px-3 py-2 border  rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 @error('password') border-red-500 @enderror" 
                        name="password" required autocomplete="new-password"
                        placeholder="Create a password">
                    
                    @error('password')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                
               
                
                <!-- Submit Button -->
                <div class="mb-4">
                    <button type="submit" 
                        class="w-full bg-blue-600 text-white py-2 px-4 rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition duration-150 ease-in-out">
                        Register
                    </button>
                </div>
                
                <!-- Login Link -->
                <div class="text-center text-sm text-gray-600">
                    <p>Already have an account? 
                        <a href="{{route('login')}}" class="text-blue-600 hover:text-blue-800 font-medium">Login here</a>
                    </p>
                </div>
            </form>
        </div>
    </div>
</body>
</html>