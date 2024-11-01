<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Login</title>
</head>
<body class="min-h-screen bg-gray-100 flex items-center justify-center">
    <form id="loginForm" class="bg-white p-8 rounded-lg shadow-md w-full max-w-sm space-y-6">
        <div class="flex flex-col">
            <label for="username" class="text-gray-700 font-medium mb-2">Username :</label>
            <input type="text" name="username" id="username" 
                   class="border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>
        <div class="flex flex-col">
            <label for="password" class="text-gray-700 font-medium mb-2">Password :</label>
            <input type="password" name="password" id="password" 
                   class="border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>
        <button type="submit" 
                class="w-full bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-600 transition duration-300">
            LOGIN
        </button>
    </form>

    <script src="assets/image/js/script.js"></script>
</body>
</html>
