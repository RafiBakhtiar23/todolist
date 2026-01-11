<x-guest-layout title="Register">

    <form method="POST" action="{{ route('register') }}" class="space-y-5">
        @csrf

        <div>
            <x-input-label value="Name" />
            <x-text-input
                name="name"
                required
                class="mt-1 w-full bg-black/40 border-white/10 text-white
                       focus:ring-indigo-500" />
        </div>

        <div>
            <x-input-label value="Email" />
            <x-text-input
                name="email"
                type="email"
                required
                class="mt-1 w-full bg-black/40 border-white/10 text-white
                       focus:ring-indigo-500" />
        </div>

        <div>
            <x-input-label value="Password" />
            <x-text-input
                name="password"
                type="password"
                required
                class="mt-1 w-full bg-black/40 border-white/10 text-white
                       focus:ring-indigo-500" />
        </div>

        <div>
            <x-input-label value="Confirm Password" />
            <x-text-input
                name="password_confirmation"
                type="password"
                required
                class="mt-1 w-full bg-black/40 border-white/10 text-white
                       focus:ring-indigo-500" />
        </div>

        <button
            class="w-full py-3 rounded-xl
                   bg-indigo-600 hover:bg-indigo-700
                   transition font-medium">
            Register
        </button>

        <p class="text-center text-sm opacity-60">
            Sudah punya akun?
            <a href="{{ route('login') }}"
               class="text-indigo-400 hover:underline">
                Login
            </a>
        </p>
    </form>

</x-guest-layout>
