@extends('layouts.app')

@section('content')
    <section class="text-center">
        <p class="text-sm font-bold uppercase tracking-widest text-pink-400">Route parameter</p>
        <h1 class="mt-4 break-words text-5xl font-extrabold tracking-tight text-white sm:text-7xl">
            Halo,
            <span class="bg-gradient-to-r from-pink-500 via-fuchsia-500 to-violet-500 bg-clip-text text-transparent">{{ $nama }}</span>!
        </h1>
        <p class="mt-5 text-slate-400">Nama ini diambil dari URL <code class="rounded bg-white/10 px-2 py-0.5 text-pink-300">/hello/{{ $nama }}</code></p>

        <form class="mx-auto mt-10 flex max-w-sm items-center gap-2 rounded-full border border-white/15 bg-white/5 p-1.5"
              onsubmit="var n = this.nama.value.trim(); if (n) { window.location.href = '{{ url('/hello') }}/' + encodeURIComponent(n); } return false;">
            <input type="text" name="nama" placeholder="Ketik namamu..." autocomplete="off"
                   class="flex-1 bg-transparent px-4 py-2 text-sm text-white outline-none placeholder:text-slate-500">
            <button class="rounded-full bg-gradient-to-r from-pink-500 to-violet-500 px-5 py-2 text-sm font-semibold text-white">Sapa</button>
        </form>
    </section>
@endsection
