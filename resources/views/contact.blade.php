@extends('layouts.app')

@section('content')
    <div class="mx-auto max-w-2xl">
        <div class="text-center">
            <h1 class="text-4xl font-extrabold tracking-tight text-white">Hubungi <span class="bg-gradient-to-r from-pink-500 to-violet-500 bg-clip-text text-transparent">saya</span></h1>
            <p class="mt-3 text-slate-400">Pilih salah satu kanal di bawah ini.</p>
        </div>

        <div class="mt-10 space-y-4">
            @foreach ($kontak as $k)
                <a href="{{ $k['href'] }}" target="_blank" rel="noopener"
                   class="group flex items-center gap-4 rounded-2xl border border-white/10 bg-white/5 p-5 backdrop-blur transition duration-300 hover:-translate-y-0.5 hover:border-pink-500/40 hover:bg-white/10">
                    <span class="grid h-12 w-12 shrink-0 place-items-center rounded-xl bg-gradient-to-br from-pink-500 to-violet-500 text-lg font-extrabold text-white">
                        {{ strtoupper(mb_substr($k['label'], 0, 1)) }}
                    </span>
                    <span class="flex-1">
                        <span class="block text-xs font-semibold uppercase tracking-widest text-slate-500">{{ $k['label'] }}</span>
                        <span class="block font-semibold text-white">{{ $k['nilai'] }}</span>
                    </span>
                    <span class="text-slate-500 transition group-hover:translate-x-1 group-hover:text-pink-400">&rarr;</span>
                </a>
            @endforeach
        </div>
    </div>
@endsection
