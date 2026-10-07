@extends('layouts.app')

@section('content')
    {{-- Hero --}}
    <section class="text-center">
        <span class="inline-flex items-center gap-2 rounded-full border border-pink-500/30 bg-pink-500/10 px-4 py-1.5 text-xs font-bold uppercase tracking-widest text-pink-400">
            <span class="h-1.5 w-1.5 animate-pulse rounded-full bg-pink-400"></span> Tugas Rutin 9
        </span>
        <h1 class="mt-6 text-5xl font-extrabold leading-tight tracking-tight text-white sm:text-6xl">
            Selamat datang di
            <span class="bg-gradient-to-r from-pink-500 via-fuchsia-500 to-violet-500 bg-clip-text text-transparent">Laravel</span>
        </h1>
        <p class="mx-auto mt-5 max-w-xl text-lg text-slate-400">
            Setup berhasil. Halaman ini dirender oleh Blade, dan semua data di bawah dikirim langsung dari route.
        </p>
        <div class="mt-8 flex flex-wrap justify-center gap-3">
            <a href="{{ url('/about') }}" class="rounded-full bg-gradient-to-r from-pink-500 to-violet-500 px-7 py-3 text-sm font-semibold text-white shadow-lg shadow-pink-500/30 transition hover:-translate-y-0.5">Tentang saya</a>
            <a href="{{ url('/hello/Yaya') }}" class="rounded-full border border-white/15 bg-white/5 px-7 py-3 text-sm font-semibold text-white transition hover:bg-white/10">Coba /hello/Yaya</a>
        </div>
    </section>

    {{-- Statistik --}}
    <section class="mt-16 grid grid-cols-2 gap-4 sm:grid-cols-4">
        @foreach ($statistik as $s)
            <div class="rounded-2xl border border-white/10 bg-white/5 p-5 text-center backdrop-blur">
                <div class="bg-gradient-to-br from-pink-400 to-violet-400 bg-clip-text text-4xl font-extrabold text-transparent">{{ $s['angka'] }}</div>
                <div class="mt-1 text-sm text-slate-400">{{ $s['label'] }}</div>
            </div>
        @endforeach
    </section>

    {{-- Fitur --}}
    <section class="mt-16">
        <h2 class="mb-6 text-center text-2xl font-extrabold text-white">Kenapa Laravel?</h2>
        <div class="grid gap-5 sm:grid-cols-2">
            @foreach ($fitur as $i => $f)
                <article class="group rounded-2xl border border-white/10 bg-white/5 p-6 backdrop-blur transition duration-300 hover:-translate-y-1 hover:border-pink-500/40 hover:bg-white/10">
                    <span class="grid h-10 w-10 place-items-center rounded-xl bg-gradient-to-br from-pink-500 to-violet-500 text-sm font-extrabold text-white shadow-lg shadow-pink-500/20">{{ $i + 1 }}</span>
                    <h3 class="mt-4 text-lg font-bold text-white">{{ $f['judul'] }}</h3>
                    <p class="mt-1.5 text-sm leading-relaxed text-slate-400">{{ $f['isi'] }}</p>
                </article>
            @endforeach
        </div>
    </section>
@endsection
