<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ $title ?? 'FiiTodo' }}</title>

    @vite('resources/css/app.css')
</head>

<body class="min-h-screen text-white
             bg-gradient-to-br from-[#050a1a] to-[#0b1330]
             flex items-center justify-center relative overflow-hidden">

    <!-- ambient lights -->
    <div class="ambient top-[-120px] left-[-120px]"></div>
    <div class="ambient bottom-[-160px] right-[-160px]"></div>

    <!-- auth card -->
    <div class="relative z-10 w-full max-w-md px-6">
        <div
            class="bg-white/10 backdrop-blur-2xl
                   border border-white/10
                   rounded-2xl p-8 shadow-2xl">

            <!-- logo / title -->
            <div class="text-center mb-6">
                <h1 class="text-2xl font-semibold tracking-wide">
                    Fii<span class="text-indigo-400">Todo</span>
                </h1>
                <p class="text-sm opacity-60 mt-1">
                    Fokus satu hal kecil hari ini
                </p>
            </div>

            {{ $slot }}
        </div>
    </div>

</body>
</html>
