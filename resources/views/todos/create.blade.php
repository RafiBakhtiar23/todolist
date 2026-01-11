<x-layouts.app title="Tambah">

<div class="max-w-md mx-auto mt-16">

    <a href="/"
       class="inline-flex items-center gap-2 text-sm opacity-60 hover:opacity-100 mb-6">
        ← Kembali
    </a>

    <form method="POST" action="/store"
          class="canvas p-8 space-y-6">
        @csrf

        <h2 class="text-xl font-semibold">
            Tambah satu hal kecil
        </h2>

        <input name="title"
               autofocus
               placeholder="Apa yang ingin kamu selesaikan?"
               class="w-full p-3 rounded-xl bg-black/40 outline-none
                      focus:ring-2 focus:ring-indigo-500">

        <textarea name="description"
                  placeholder="Catatan kecil (opsional)"
                  class="w-full p-3 rounded-xl bg-black/40"></textarea>

        <button class="w-full btn-primary py-3 rounded-xl">
            Simpan
        </button>
    </form>

</div>

</x-layouts.app>
