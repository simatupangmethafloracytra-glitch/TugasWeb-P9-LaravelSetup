@extends('layouts.app')

@section('content')
    <div class="mx-auto max-w-2xl">
        <div class="rounded-3xl border border-white/10 bg-white/5 p-8 backdrop-blur">
            <div class="flex items-center gap-5">
                <span class="grid h-20 w-20 shrink-0 place-items-center rounded-2xl bg-gradient-to-br from-pink-500 to-violet-500 text-3xl font-extrabold text-white shadow-xl shadow-pink-500/30">
                    {{ strtoupper(mb_substr($profil[0]['isi'], 0, 1)) }}
                </span>
                <div>
                    <h1 class="text-2xl font-extrabold text-white">{{ $profil[0]['isi'] }}</h1>
                    <p class="text-sm text-pink-400">{{ $profil[2]['isi'] }} &middot; {{ $profil[1]['isi'] }}</p>
                </div>
            </div>

            <dl class="mt-8 divide-y divide-white/10 rounded-2xl border border-white/10 bg-slate-950/40">
                @foreach ($profil as $p)
                    <div class="flex gap-4 px-5 py-3.5 text-sm">
                        <dt class="w-24 shrink-0 text-slate-500">{{ $p['label'] }}</dt>
                        <dd class="font-medium text-slate-200">{{ $p['isi'] }}</dd>
                    </div>
                @endforeach
            </dl>

            <h2 class="mb-3 mt-8 text-sm font-bold uppercase tracking-widest text-slate-500">Teknologi</h2>
            <div class="flex flex-wrap gap-2">
                @foreach ($teknologi as $t)
                    <span class="rounded-full border border-violet-500/30 bg-violet-500/10 px-4 py-1.5 text-sm font-medium text-violet-300">{{ $t }}</span>
                @endforeach
            </div>
        </div>
    </div>
@endsection
