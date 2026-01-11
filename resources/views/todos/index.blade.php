<x-layouts.app title="Dashboard">

<div class="canvas max-w-6xl mx-auto mt-10 p-8 sm:p-10 space-y-10">

    <!-- HEADER -->
<div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-6">
    <div>
        <h2 class="text-3xl font-semibold mb-1">
            FiiTodo
        </h2>
        <p class="text-sm opacity-60 max-w-md">
            Fokus satu hal kecil hari ini.
            Jangan kebanyakan mikir. Jalanin aja dulu.
        </p>
    </div>

        <a href="/create"
        class="btn-primary px-7 py-4 rounded-2xl text-sm font-medium shadow-lg">
            + Tambah satu hal kecil
        </a>
    </div>


    <!-- STATS -->
    <div class="grid grid-cols-1 sm:grid-cols-3 gap-6">
        <div class="stat-card p-6">
            <p class="text-xs opacity-60">Total</p>
            <p class="text-3xl font-semibold">{{ $todos->count() }}</p>
        </div>

        <div class="stat-card p-6">
            <p class="text-xs opacity-60">Selesai</p>
            <p class="text-3xl font-semibold">
                {{ $todos->where('is_done', true)->count() }}
            </p>
        </div>

        <div class="stat-card p-6">
            <p class="text-xs opacity-60">Progress</p>
            <p class="text-3xl font-semibold">
                {{ $todos->count() ? round(($todos->where('is_done', true)->count() / $todos->count()) * 100) : 0 }}%
            </p>
        </div>
    </div>

    <!-- TODO LIST -->
    <div class="space-y-4">
        @forelse($todos as $todo)
        <div
            x-data="{ done: {{ $todo->is_done ? 'true' : 'false' }} }"
            :class="done ? 'opacity-40' : ''"
            class="todo-card p-6 flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">

            <div>
                <h3 class="text-lg font-medium">
                    {{ $todo->title }}
                </h3>
                <p class="text-xs opacity-50">
                    {{ $todo->created_at->diffForHumans() }}
                </p>
            </div>

            <div class="flex gap-2">
                <!-- DONE -->
                <form method="POST" action="/toggle/{{ $todo->id }}"
                      @submit.prevent="done = !done; setTimeout(() => $el.submit(), 200)">
                    @csrf
                    @method('PATCH')
                    <button class="px-3 py-2 rounded-lg bg-white/20 hover:bg-white/30">
                        ✓
                    </button>
                </form>

                <!-- EDIT -->
                <a href="/edit/{{ $todo->id }}"
                   class="px-3 py-2 rounded-lg bg-white/20 hover:bg-white/30">
                    ✎
                </a>

                <!-- DELETE -->
                <form method="POST" action="/delete/{{ $todo->id }}"
                      @submit.prevent="
                        $el.closest('.todo-card').classList.add('scale-95','opacity-0');
                        setTimeout(() => $el.submit(), 200);
                      ">
                    @csrf
                    @method('DELETE')
                    <button class="px-3 py-2 rounded-lg bg-red-600 hover:bg-red-700">
                        ✕
                    </button>
                </form>
            </div>
        </div>
        @empty
        <div class="text-center py-24 opacity-60">
            <p class="text-xl mb-2">Hari ini kosong.</p>
            <p class="text-sm">Dan itu gak masalah.</p>
        </div>
        @endforelse
    </div>

</div>

</x-layouts.app>
