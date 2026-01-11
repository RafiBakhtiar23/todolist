<x-guest-layout title="Login">

    <form method="POST" action="{{ route('login') }}" class="space-y-5">
        @csrf

        <!-- Email -->
        <div>
            <x-input-label value="Email" />
            <x-text-input
                name="email"
                type="email"
                required autofocus
                class="mt-1 w-full bg-black/40 border-white/10 text-white
                       focus:ring-indigo-500" />
        </div>

        <!-- Password -->
        <div>
            <x-input-label value="Password" />
            <x-text-input
                name="password"
                type="password"
                required
                class="mt-1 w-full bg-black/40 border-white/10 text-white
                       focus:ring-indigo-500" />
        </div>

        <!-- Remember -->
        <div class="flex items-center justify-between text-sm opacity-70">
            <label class="flex items-center gap-2">
                <input type="checkbox" name="remember"
                       class="rounded bg-black/40 border-white/20">
                Remember me
            </label>

            <a href="{{ route('password.request') }}"
               class="hover:text-indigo-400 transition">
                Lupa password?
            </a>
        </div>

        <button
            class="w-full py-3 rounded-xl
                   bg-indigo-600 hover:bg-indigo-700
                   transition font-medium">
            Log in
        </button>

        <p class="text-center text-sm opacity-60">
            Belum punya akun?
            <a href="{{ route('register') }}"
               class="text-indigo-400 hover:underline">
                Daftar di sini
            </a>
        </p>
    </form>

</x-guest-layout>
