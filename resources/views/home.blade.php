<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel URL Shortener</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex items-center justify-center h-screen bg-gray-100">
    <div class="w-full max-w-md p-6 bg-white shadow-md rounded-lg">
        <h2 class="text-2xl font-bold mb-4">🔗 Laravel URL Shortener</h2>
        
        @if(session('success'))
            <p class="text-green-600">Shortened URL: 
                <a href="{{ session('success') }}" class="text-blue-500" target="_blank">
                    {{ session('success') }}
                </a>
            </p>
        @endif

        <form action="/shorten" method="POST" class="mt-4">
            @csrf
            <input type="text" name="original_url" class="w-full px-4 py-2 border rounded" placeholder="Enter long URL">
            <button type="submit" class="mt-2 px-4 py-2 bg-blue-500 text-white rounded">Shorten</button>
        </form>
    </div>
</body>
</html>
