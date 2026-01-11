<x-layouts.app title="Edit">

<div class="max-w-md mx-auto mt-20">

    <a href="/"
       class="inline-flex items-center gap-2 text-sm opacity-60 hover:opacity-100 mb-6">
        ← Kembali
    </a>

    <form method="POST" action="/update/{{ $todo->id }}"
          class="canvas p-8 space-y-6">
        @csrf
        @method('PUT')

        <h2 class="text-xl font-semibold">
            Perbaiki pelan-pelan
        </h2>

        <input name="title"
               value="{{ $todo->title }}"
               class="w-full p-3 rounded-xl bg-black/40 outline-none">

        <textarea name="description"
                  class="w-full p-3 rounded-xl bg-black/40">{{ $todo->description }}</textarea>

        <button class="w-full bg-emerald-600 hover:bg-emerald-700 py-3 rounded-xl transition">
            Update
        </button>
    </form>

</div>

</x-layouts.app>
