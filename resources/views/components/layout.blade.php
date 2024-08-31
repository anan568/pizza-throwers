<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pizza Throwers</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body class="bg-slate-900">
    <div class="">
        <nav class="flex justify-between justify-items-center py-4 px-10 bg-purple-600 border-b-4 border-white/50">
            <div>
                <a href="/" class="text-xl font-extrabold hover:text-yellow-500 transition-colors duration-300">
                    Pizza Throwers
                </a>
            </div>
            <div class="space-x-8 font-bold">
                <a class="rounded-lg hover:bg-purple-900/50 p-3 hover:text-yellow-500 transition-colors duration-300" href="">Home</a>
                <a class="rounded-lg hover:bg-purple-900/50 p-3 hover:text-yellow-500 transition-colors duration-300" href="">Downloads</a>
                <a class="rounded-lg hover:bg-purple-900/50 p-3 hover:text-yellow-500 transition-colors duration-300" href="">Contact Us</a>
            </div>
            <div>
                <a href="" class="text-xs hover:text-sm items-end">&target;</a>
            </div>
        </nav>
        <main class="mt-10 max-w-[986px] px-10 mx-auto">
            {{$slot}}
        </main>
    </div>
</body>
</html>