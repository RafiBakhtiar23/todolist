<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ $title ?? 'LuxTodo' }}</title>

    @vite('resources/css/app.css')
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body class="min-h-screen text-white
             bg-gradient-to-br from-[#050a1a] via-[#070e26] to-[#0b1330]
             overflow-x-hidden">

<!-- ambient glow -->
<div class="ambient top-[-140px] left-[-140px]"></div>
<div class="ambient bottom-[-160px] right-[-160px]"></div>

<!-- HEADER -->
<header
    class="sticky top-0 z-30
           backdrop-blur-xl
           bg-black/20
           border-b border-white/10">

    <div class="max-w-7xl mx-auto px-6 py-4
                flex items-center justify-between">

        <!-- BRAND -->
        <div class="flex items-center gap-3">
            <div class="w-9 h-9 rounded-xl
                        bg-indigo-600/20
                        flex items-center justify-center
                        font-bold text-indigo-400">
                F
            </div>
            <span class="text-lg font-semibold tracking-wide">
                FiiTodo
            </span>
        </div>

        <!-- RIGHT ACTION -->
        <div class="flex items-center gap-4">

            <!-- subtle status -->
            <span class="hidden sm:inline-flex
                         px-3 py-1.5 text-xs
                         rounded-full
                         bg-white/5 border border-white/10
                         text-white/60">
                Fokus hari ini
            </span>

            <!-- logout -->
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button
                    class="text-sm text-white/60
                           hover:text-white
                           transition">
                    Logout
                </button>
            </form>

        </div>
    </div>
</header>

<!-- MAIN -->
<main class="relative max-w-7xl mx-auto px-6 py-12 pb-40">

    <!-- subtle grid texture -->
    <div class="pointer-events-none absolute inset-0
                bg-[radial-gradient(circle_at_1px_1px,rgba(255,255,255,0.035)_1px,transparent_0)]
                bg-[size:26px_26px]
                opacity-40">
    </div>

    {{ $slot }}
</main>

</body>
</html>
